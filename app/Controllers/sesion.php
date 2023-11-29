<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Sesion extends BaseController 
{
    protected $session;
    protected $userModel;

    public function __construct() 
    {
        $this->session = \Config\Services::session();
        $this->userModel = model('UserModel'); // Carga tu modelo de usuario correctamente
    }
    
    public function login() 
    {
        return view('sesion/login');
    }

    public function authenticate() 
    {
        $nombre = $this->request->getPost('nombre');
        $password = $this->request->getPost('password');
    
        // Busca el usuario en la base de datos por nombre de usuario
        $usuario = $this->userModel->where('nombre', $nombre)->first();
    
        if ($usuario && password_verify($password, $usuario['password'])) {
            // Si las credenciales son válidas, crea una sesión para el usuario
            $usuarioData = [
                'id' => $usuario['id'],
                'nombre' => $usuario['nombre'],
                'logged_in' => true
            ];
            $this->session->set($usuarioData);
    
            return redirect()->to('/vistas/detalles');
        } else {
            // Si las credenciales son incorrectas, redirige a la página de inicio de sesión con un mensaje de error
            return redirect()->to('/proveedor/agregar');
        }
    }
    

    public function logout() 
    {
        $this->session->destroy();
        return redirect()->to('sesion/login');
    }
}
