<?php
namespace App\Controllers;

use App\Models\UserModel;

class Perfil extends BaseController
{
    public function index($id_usuario)
    {
        $userModel = new UserModel();

        // Buscar usuario por ID
        $usuario = $userModel->find($id_usuario);

        // Pasar los datos a la vista
        return view('perfil', ['usuario' => $usuario]);
    }
}