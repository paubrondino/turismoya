<?php

namespace App\Controllers;

use App\Models\ActividadModel;
use App\Models\ReservaModel;
use CodeIgniter\Controller;

class Reserva extends BaseController
{
    // Mostrar formulario de reserva
    public function index($actividad = null)
    {
        $actividadModel = new ActividadModel();

        // Reemplazamos guiones por espacios si viene en la URL
        $nombreActividad = str_replace('-', ' ', $actividad);

        // Buscamos la actividad en la base de datos
        $actividadData = $actividadModel->like('nombre', $nombreActividad)->first();

        if (!$actividadData) {
            return redirect()->back()->with('error', 'Actividad no encontrada.');
        }

        $data['actividad'] = $actividadData;
        return view('reserva_actividad', $data);
    }

    // Procesar reserva
    public function mandar()
    {
        $idActividad = $this->request->getPost('id_actividad');
        $adultos     = $this->request->getPost('adultos');
        $ninos       = $this->request->getPost('ninos');
        $fecha       = $this->request->getPost('fecha');
        $idUsuario   = session('id_usuario') ?? 1;

        $actividadModel = new ActividadModel();
        $reservaModel   = new ReservaModel();

        $db = \Config\Database::connect();
        $db->transStart();

        $actividad = $actividadModel->find($idActividad);
        if (!$actividad) {
            return redirect()->back()->with('error', 'Actividad no encontrada.');
        }

        // Verificar si ya existe una reserva para esa fecha y actividad
        $yaReservada = $reservaModel
            ->where('id_actividad', $idActividad)
            ->where('fecha', $fecha)
            ->countAllResults();

        if ($yaReservada > 0) {
            return redirect()->back()->with('error', '❌ Esta fecha ya está reservada.');
        }

        // Verificar disponibilidad
        if ($actividad['disponibilidad'] > 0) {

            // Insertar reserva
            $reservaModel->insert([
                'id_usuario'   => $idUsuario,
                'id_actividad' => $idActividad,
                'fecha'        => $fecha,
                'adultos'      => $adultos,
                'ninos'        => $ninos
            ]);

            // Restar disponibilidad
            $actividadModel->set('disponibilidad', 'disponibilidad - 1', false)
                           ->where('id_actividad', $idActividad)
                           ->update();

        } else {
            return redirect()->back()->with('error', '❌ No hay disponibilidad para esta actividad.');
        }

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()->with('error', 'Ocurrió un error al procesar la reserva.');
        }

        // Envío de email
        $email = \Config\Services::email();
        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser'] = 'viajesturismoya@gmail.com';
        $config['SMTPPass'] = 'rukeyqtcxwijswug';
        $config['SMTPPort'] = 587;
        $config['mailType'] = 'html';
        $email->initialize($config);

        $mensaje = "
            <h2>Nueva Reserva</h2>
            <p><b>Actividad:</b> {$actividad['nombre']}</p>
            <p><b>Fecha:</b> {$fecha}</p>
            <p><b>Adultos:</b> {$adultos}</p>
            <p><b>Niños:</b> {$ninos}</p>
        ";

        $email->setFrom('viajesturismoya@gmail.com', 'Reservas TurismoYa');
        $email->setTo('viajesturismoya@gmail.com');
        $email->setSubject('Nueva Reserva de Actividad');
        $email->setMessage($mensaje);

        if ($email->send()) {
            return redirect()->back()->with('success', '✅ Reserva enviada y registrada con éxito.');
        } else {
            echo $email->printDebugger();
        }
    }

    // Obtener la cantidad de fechas disponibles (no las fechas)
    public function fechasDisponibles($idActividad)
    {
        $actividadModel = new ActividadModel();
        $actividad = $actividadModel->find($idActividad);

        if (!$actividad) {
            return $this->response->setJSON(['cantidad' => 0]);
        }

        return $this->response->setJSON([
            'cantidad' => (int) $actividad['disponibilidad']
        ]);
        
    if ($actividad && !empty($actividad['fechas_disponibles'])) {
        $fechas = json_decode($actividad['fechas_disponibles'], true);
        return $this->response->setJSON($fechas);
    } else {
        return $this->response->setJSON([]);
    }
    }
}
            