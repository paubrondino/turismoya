<?php

namespace App\Models;

use CodeIgniter\Model;

class usuariomodel extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'gmail','imagen','clave', "id_rol" ];

    // Función para insertar datos
    public function insertarDatos(array $datos): bool {
        // insert() devuelve el ID insertado o false si falla
        return $this->insert($datos) !== false;
    }

    public function registrarUsuario( $datos) {
        $datos['id_rol'] = 2; // Asignar rol de usuario normal (2) por defecto
        return $this->insert($datos) !== false;
    }
    
}

