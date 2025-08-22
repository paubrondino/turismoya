<?php
namespace App\Controllers;
use App\Models\usuariomodel;
class usuario extends BaseController {
 public function registro_view() {
 return view('registro');
 }
 public function registro() {
 $usuarioModel = new usuariomodel();
 $datos = [
 'nombre' => $this->request->getPost('nombre'),
 'apellido' => $this->request->getPost('apellido'),
 'gmail' => $this->request->getPost('gmail'),
 'clave' => password_hash($this->request->getPost('clave'), PASSWORD_DEFAULT)
 ];
 $usuarioModel->insertarDatos($datos);
return view('/login');



 }
 public function registrar() {
 return view('login');
 }



 public function iniciarSesion() {
 $usuarioModel = new usuarioModel();
 $gmail = $this->request->getPost('gmail');
 $clave = $this->request->getPost('clave');
 $usuario = $usuarioModel->where('gmail', $gmail)->first();
 if ($usuario && password_verify($clave,
$usuario['clave'])) {
 session()->set('usuario', $usuario); 
  return redirect()->to('Prueba');
}else {





}

 }
public function Prueba () {
 return view('Prueba');

}

    public function logout()
    {
        // Inicia la sesión si no está iniciada
        $session = session();

        // Elimina todos los datos de sesión
        $session->destroy();

        // Redirige al login
        return redirect()->to('/login');
    }
    public function listado()
{
    // Verifica si hay sesión activa
    if (!session()->has('usuario')) {
        return redirect()->to('/login')->with('error', 'Debes iniciar sesión para acceder.');
    }

    // si llegó acá, significa que está logueado
    return view('listado');
}
}


 

?>
