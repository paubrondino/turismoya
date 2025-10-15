<?php

namespace App\Controllers;

use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index()
    {
        $actividadModel = new ActividadModel();
        $data['actividades'] = $actividadModel->findAll();

        // renderiza la vista actividades.php
        return view('actividades', $data);
    }

     public function detalle($id)
    {
        $actividadModel = new ActividadModel();
        $actividad = $actividadModel->find($id);

        if (!$actividad) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Actividad no encontrada");
        }

        return view('actividad_detalle', ['actividad' => $actividad]);
    }
}

