<?php
namespace App\Controllers;

class Prueba extends BaseController
{
   public function index()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

    return view('prueba');
}

      public function mostrar()
    {
        $actividadModel = new ActividadModel();
        $data['actividad'] = $actividadModel->findAll(); // trae todas las actividades
        return view('Prueba', $data); // la vista de la página principal
    $session->set('es_operador', $usuario['es_operador']);

    $rol = session()->get('usuario')['rol'];
if($rol == 'operador'){
    return redirect()->to('/operador/home');
}else{
    return view('pagprincipal');
}
}
public function crear()
{
    if (session()->get('rol') !== 'operador') {
        return redirect()->to('/')->with('error', 'No tenés permisos para acceder.');
    }

    return view('actividad_crear');
}

}


