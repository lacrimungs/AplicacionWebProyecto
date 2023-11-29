<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class proveedor extends BaseController
{
    public function index()
    {
        //
    }

    public function consultar(){
        $proveedorModel = model('ProveedorModel');
        $data['proveedores'] = $proveedorModel->findAll();
        return 
        view('common/head') .
        view('common/administrador') .
        view('proveedor/consultar',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form', 'url']);
        $categoriaModel = model('CategoriaModel'); // <-- Aquí la corrección
        $productoModel = model('ProductoModel');
    
        $data['categorias'] = $categoriaModel->findAll(); // <-- Aquí también
        $data['productos'] = $productoModel->findAll();
    
        return view('common/head') 
        . view('common/administrador') 
        . view('proveedor/agregar', $data) 
        . view('common/footer');
    }
    

    public function insert(){
        helper(['form', 'url']);
        $proveedorModel = model('ProveedorModel');
        
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoP" => $_POST['apellidoP'],
            "apellidoM" => $_POST['apellidoM'],
            "telefono" => $_POST['telefono'],
            "direccion" => $_POST['direccion'],
            "categoria_id" => $_POST['categoria_id'],
            "producto_id" => $_POST['producto_id']
        ];
        $proveedorModel->insert($data, false);
        return redirect('proveedor/consultar');
    }


    public function delete($id){
        $proveedorModel = model('ProveedorModel');
        $proveedorModel->delete($id);
        return redirect('proveedor/consultar');
    }

    public function editar($id){
        $proveedorModel = model('ProveedorModel');
        $categoriaModel = model('CategoriaModel');
        $productoModel = model('ProductoModel');
    
        $data['proveedor'] = $proveedorModel->find($id); // Cambio aquí
        $data['categorias'] = $categoriaModel->findAll();
        $data['productos'] = $productoModel->findAll();
    
        return view('common/head') .
        view('common/administrador') .
        view('proveedor/editar', $data) .
        view('common/footer');
    }
    


    public function update (){
        $proveedorModel = model('ProveedorModel');

        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoP" => $_POST['apellidoP'],
            "apellidoM" => $_POST['apellidoM'],
            "telefono" => $_POST['telefono'],
            "direccion" => $_POST['direccion'],
            "genero" => $_POST['genero'],
            "categoria_id" => $_POST['categoria_id'],
            "producto_id" => $_POST['producto_id']
        ];

        $proveedorModel->update($_POST['id'],$data);
        return redirect('proveedor/consultar');
    }
}
