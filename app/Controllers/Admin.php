<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Admin extends BaseController
{
   

    public function index()
    {
        $usuarioModel = new UsuarioModel();

        // Traer usuarios que NO sean admin (ajusta si tenés un rol para admin)
        $data['usuarios'] = $usuarioModel->findAll();

        return view('administrador', $data);
    }

    public function aceptar($id_usuario)
    {
        $usuarioModel = new UsuarioModel();

        // Cambiar rol a operador (id_rol = 1)
        $usuarioModel->update($id_usuario, [
            'id_rol' => 1
        ]);

        return redirect()->to(base_url('admin'));
    }

    public function rechazar($id_usuario)
    {
        $usuarioModel = new UsuarioModel();

        // Cambiar rol a usuario normal (id_rol = 2)
        $usuarioModel->update($id_usuario, [
            'id_rol' => 2
        ]);

        return redirect()->to(base_url('admin'));
    }
}
