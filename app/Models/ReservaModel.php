<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reserva';
    protected $primaryKey = 'id_reserva';
    protected $allowedFields = ['id_usuario', 'id_actividad'];
    
}
