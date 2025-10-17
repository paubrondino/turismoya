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
    public function buscar()
    {
        $query = trim($this->request->getGet('q'));
        $model = new ActividadModel();
    
        if ($query) {
            $db = \Config\Database::connect();
            $builder = $db->table('actividad');
            $builder->select('*');
    
            // 🔍 Buscamos sin importar mayúsculas/minúsculas
            $builder->groupStart()
                ->like('LOWER(nombre)', strtolower($query))
                ->orLike('LOWER(descripcion)', strtolower($query))
            ->groupEnd();
    
            $data['actividades'] = $builder->get()->getResultArray();
        } else {
            $data['actividades'] = $model->findAll();
        }
    
        $data['query'] = $query;
    
        return view('actividades', $data);
    }
    
}

