<?php

namespace App\Controllers;

use App\Models\ActividadModel;
use App\Models\ReservaModel;

class Actividad extends BaseController
{
    // Vista para subir actividad
    public function index()
    {
        return view('subir_actividad');
    }

    // Guardar actividad en la base de datos
    public function guardar()
    {
        $actividadModel = new ActividadModel();

        // 1️⃣ Validación del formulario
        if (!$this->validate([
            'nombre' => 'required|min_length[3]',
            'descripcion' => 'required|min_length[5]',
            'precio' => 'required|decimal',
            'imagen' => 'uploaded[imagen]|is_image[imagen]|max_size[imagen,2048]'
        ])) {
            return redirect()->back()->with('error', 'Error en el formulario')->withInput();
        }

        // 2️⃣ Subida de la imagen
        $imagen = $this->request->getFile('imagen');
        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move(FCPATH . 'uploads/actividades', $nuevoNombre);
        } else {
            return redirect()->back()->with('error', 'Error al subir la imagen');
        }

        // 3️⃣ Procesar las fechas
        $fechas = $this->request->getPost('fechas'); // ej: "2025-10-20,2025-10-21"
        $fechasArray = array_map('trim', explode(',', $fechas));
        $cantidadFechas = count($fechasArray);

        // 4️⃣ Guardar en la DB
        $actividadModel->save([
            'nombre'             => $this->request->getPost('nombre'),
            'precio'             => $this->request->getPost('precio'),
            'descripcion'        => $this->request->getPost('descripcion'),
            'disponibilidad'     => $cantidadFechas,
            'imagen'             => $nuevoNombre,
            'fechas_disponibles' => json_encode($fechasArray)
        ]);

        return redirect()->to(base_url('prueba'))->with('success', 'Actividad subida correctamente');
    }

    // Listado de actividades
    public function prueba()
    {
        $actividadModel = new ActividadModel();
        $data['actividades'] = $actividadModel->findAll();

        return view('prueba', $data);
    }

    // Detalle de actividad
    public function detalle($id)
    {
        $actividadModel = new ActividadModel();
        $actividad = $actividadModel->find($id);

        if (!$actividad) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Actividad no encontrada');
        }

        // Decodificar las fechas
        $actividad['fechas_disponibles'] = json_decode($actividad['fechas_disponibles'], true);

        return view('actividad_detalle', ['actividad' => $actividad]);
    }
}

// ------------------- Controlador de Reserva -------------------

class Reserva extends BaseController
{
    // Guardar reserva
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

        // Verificar si ya existe una reserva para esa fecha
        $yaReservada = $reservaModel
            ->where('id_actividad', $idActividad)
            ->where('fecha', $fecha)
            ->countAllResults();

        if ($yaReservada > 0) {
            return redirect()->back()->with('error', '❌ Esta fecha ya está reservada.');
        }

        // Verificar disponibilidad
        if ($actividad['disponibilidad'] > 0) {
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

        return redirect()->back()->with('success', '✅ Reserva registrada con éxito.');
    }

    // Traer fechas disponibles para Flatpickr
    public function fechasDisponibles($idActividad)
    {
        $actividadModel = new ActividadModel();
        $actividad = $actividadModel->find($idActividad);

        if (!$actividad) {
            return $this->response->setJSON([]);
        }

        $fechas = json_decode($actividad['fechas_disponibles'], true) ?? [];
        return $this->response->setJSON($fechas);
    }
}
