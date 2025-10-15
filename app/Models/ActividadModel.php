<?php

namespace App\Models;

use CodeIgniter\Model;

class ActividadModel extends Model
{
   protected $table = 'actividad';
protected $primaryKey = 'id_actividad';
protected $allowedFields = ['nombre', 'precio', 'descripcion', 'disponibilidad', 'imagen'];
    protected $returnType = 'array';
     // Función para obtener disponibilidad actual
    public function getDisponibilidad($idActividad)
    {
        return $this->where('id_actividad', $idActividad)
                    ->select('disponibilidad')
                    ->get()
                    ->getRow('disponibilidad');
    }

    // Función para restar disponibilidad
    public function restarDisponibilidad($idActividad)
    {
        return $this->set('disponibilidad', 'disponibilidad - 1', false)
                    ->where('id_actividad', $idActividad)
                    ->where('disponibilidad >', 0)
                    ->update();
    }
}
