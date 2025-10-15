<?php
namespace App\Controllers;
use App\Models\usuariomodel;
use App\Models\pagprincipal;

class usuario extends BaseController {

   public function registro_view() {
        return view('registro');
    }

    public function registro() {
        helper(['form']);

        $rules = [
            'nombre'   => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'gmail'    => 'required|valid_email|is_unique[usuario.gmail]',
            'clave'    => 'required|min_length[6]'
        ];

        if ($this->validate($rules)) {
            $usuarioModel = new \App\Models\usuariomodel();
            
            $datos = [
                'nombre'   => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'gmail'    => $this->request->getPost('gmail'),
                'clave'    => password_hash($this->request->getPost('clave'), PASSWORD_DEFAULT)
            ];
            
            $usuarioModel->registrarUsuario($datos); 
            
            session()->setFlashdata('success', '¡Usuario registrado con éxito! Por favor, inicia sesión.');
            return redirect()->to('login');
        } else {
            return view('registro', [
                'validation' => $this->validator
            ]);
        }
    }

    public function inicio() {
        return view('login');
    }


public function iniciarSesion()
{
    $usuarioModel = new \App\Models\pagprincipal();

    $gmail = $this->request->getPost('gmail');
    $clave = $this->request->getPost('clave');

    $usuario = $usuarioModel->validarusuario($gmail, $clave);

    if ($usuario) {
        session()->set([
            'id_usuario' => $usuario['id_usuario'],
            'nombre'     => $usuario['nombre'],
            'apellido'   => $usuario['apellido'],
            'gmail'      => $usuario['gmail'],
            'rol'        => $usuario['id_rol'], // 👈 acá queda guardado el 1 o el 2
            'logged_in'  => true
        ]);
        return redirect()->to('prueba');
    } else {
        session()->setFlashdata('error', 'Email o contraseña incorrectos.');
        return redirect()->to('login');
    }
}

    public function listado() {
        // 🔒 Protege la vista
        if (!session()->has('usuario')) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión para acceder.');
        }
        return view('listado');
    }

    // ✅ Logout corregido
    public function logout() {

    // eliminamos todos los datos de la sesión
    session()->remove('usuario');  
    
    // destruimos la sesión completa
    session()->destroy();

    // evitamos que el navegador muestre páginas de la cache al volver atrás
    $this->response->setHeader("Cache-Control","no-store, no-cache, must-revalidate, max-age=0");
    $this->response->setHeader("Cache-Control","post-check=0, pre-check=0");
    $this->response->setHeader("Pragma","no-cache");

    return redirect()->to('/login');


}
 public function mostrar()
    {
        return view('perfil'); // Renderiza la vista perfil.php
    }
    public function perfil()
    {
        $usuarioModel = new UsuarioModel();

        // Obtener datos del usuario logueado (ejemplo con session)
        $id_usuario = session()->get('id'); // Suponiendo que guardaste el id al loguearte
        $usuario = $usuarioModel->find($id_usuario);

        // Pasar los datos a la vista
        return view('perfil_usuario', ['usuario' => $usuario]);
    }

    public function subir_imagen()
    {
        $usuarioModel = new UsuarioModel();
        $id_usuario = session()->get('id');
        $file = $this->request->getFile('imagen');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $nombre = $file->getRandomName();
            $file->move('uploads', $nombre);

            $usuarioModel->update($id_usuario, ['imagen' => $nombre]);
            return redirect()->to(base_url('usuario/perfil'))->with('mensaje', 'Imagen subida con éxito');
        }

        return redirect()->to(base_url('usuario/perfil'))->with('mensaje', 'Error al subir la imagen');
    }

    public function solicitar_operador()
    {
        // Aquí puedes manejar la lógica de solicitud (guardar en DB, enviar correo, etc.)
        return redirect()->to(base_url('usuario/perfil'))->with('mensaje', 'Solicitud enviada con éxito');
    }
    public function solicitud() {
        // Mostrar la vista de solicitud
        return view('usuario/solicitud'); // Ruta: app/Views/usuario/solicitud.php
    }
    
    
}

    

?>
