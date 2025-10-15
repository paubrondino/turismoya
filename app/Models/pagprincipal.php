<?php
namespace App\Models;

use CodeIgniter\Model;

class pagprincipal extends Model
{
    protected $table      = 'usuario'; 
    protected $primaryKey = 'id_usuario';

    // 👇 agregamos id_rol para que lo maneje el modelo
    protected $allowedFields = ['nombre', 'apellido', 'gmail', 'clave', 'id_rol'];

    protected $useTimestamps = true;

    public function validarusuario($gmail, $clave)
    {
        $usuario = $this->where('gmail', $gmail)->first();

        if ($usuario && password_verify($clave, $usuario['clave'])) {
            return $usuario; // ahora también devuelve el id_rol
        }

        return false;
    }
}


