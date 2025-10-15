<?php

namespace App\Controllers;

class Solicitud extends BaseController
{
    public function index()
    {
        return view('solicitud'); // solo 'solicitud', coincide con el nombre del archivo
    }
     public function enviar()
    {
        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $gmail = $this->request->getPost('gmail');
        $porque = $this->request->getPost('porque_quiere');
        $experiencia = $this->request->getPost('experiencia');

        // Configurar correo
        $gmail = \Config\Services::gmail();
        $gmail->setTo('paubrondino@gmail.com'); // correo del administrador
        $gmail->setFrom('no-reply@tuweb.com', 'Sistema');
        $gmail->setSubject('Nueva solicitud de operador');
        $gmail->setMessage(
            "Nueva solicitud de operador:\n\n" .
            "Nombre: $nombre $apellido\n" .
            "Correo: $gmail\n" .
            "Por qué quiere ser operador: $porque\n" .
            "Experiencia previa: $experiencia"
        );
    }


    // Mostrar formulario
    public function index2()
    {
        return view('solicitud'); // tu vista
    }

    // Enviar formulario por Gmail
    public function enviar2()
    {
        $nombre      = $this->request->getPost('nombre');
        $apellido    = $this->request->getPost('apellido');
        $correo      = $this->request->getPost('gmail');
        $porque      = $this->request->getPost('porque_quiere');
        $experiencia = $this->request->getPost('experiencia');

        // Inicializar Email
        $email = \Config\Services::email();

        $email->setFrom('viajesturismoya@gmail.com', 'Viajes Turismo Ya');
        $email->setTo('viajesturismoya@gmail.com'); // tu correo
        $email->setSubject('Nueva solicitud de operador');

        $mensaje = "
            <h3>Nueva solicitud de operador</h3>
            <p><strong>Nombre:</strong> $nombre $apellido</p>
            <p><strong>Email:</strong> $correo</p>
            <p><strong>Por qué quiere ser operador:</strong> $porque</p>
            <p><strong>Experiencia previa:</strong> $experiencia</p>
        ";

        $email->setMessage($mensaje);

        if ($email->send()) {
            return redirect()->back()->with('success', 'Solicitud enviada correctamente.');
        } else {
            echo $email->printDebugger(); // muestra errores reales si falla
        }
    }
}



