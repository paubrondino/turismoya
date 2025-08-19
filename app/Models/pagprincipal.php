<?php
namespace App\Models;

use CodeIgniter\Model;

class pagprincipalmodel extends Model
{
    protected $table      = 'usuario'; // Nombre de tu tabla de usuarios
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'gmail', 'clave'];
    protected $useTimestamps = true;

    public function validarusuario($gmail, $clave)
    {
        $usuario = $this->where('gmail', $gmail)->first();
        if ($usuario) {
          if (password_verify($clave, $usuario['clave'])) {

                return $usuario;
            }
        }
        return false;
    }
}

