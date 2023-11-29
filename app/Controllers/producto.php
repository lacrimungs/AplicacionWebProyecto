<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class producto extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }

    public function consultar(){
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->findAll();
    
        
    
        return view('common/head') 
            . view('common/administrador') 
            . view('producto/consultar', $data) 
            . view('common/footer');
    }
    
    
    public function agregar(){ 
        return 
        view('common/head') .
        view('common/administrador') .
        view('producto/agregar') . 
        view('common/footer');
    }
    
    
    public function insert(){
        $productoModel = model('ProductoModel');
        $categoriaModel = model('ModelCategoria');
 
        $imagen_url = $this->request->getFile('imagen_url');
        
        if ($imagen_url->isValid() && !$imagen_url->hasMoved()) {
            $newName = $imagen_url->getRandomName();
            $imagen_url->move(ROOTPATH . 'public/uploads', $newName);
            
            $productoData = [
                "nombre" => $this->request->getPost('nombre'),
                "precio" => $this->request->getPost('precio'),
                "imagen_url" => $newName,
                "descripcion" => $this->request->getPost('descripcion'),
                "uso_producto" => $this->request->getPost('uso_producto'),
                "direccion_tienda" => $this->request->getPost('direccion_tienda')
            ];
            
            $productoModel->insert($productoData); // Insertar el producto con los datos correctos
            return redirect()->to('producto/consultar');
        } else {
            echo 'Error al cargar la imagen.';
        }
    }
    
    
    public function delete($id){
        $productoModel = model('ProductoModel');
        $productoModel->delete($id);
        return redirect('producto/consultar');
    }
    
    public function editar($id) {
        $productoModel = model('ProductoModel');
        $categoriaModel = model('CategoriaModel');
    
        // Obtener datos del producto por su ID
        $data['producto'] = $productoModel->find($id);
    
        if ($data['producto']) {
            // Verificar si el producto tiene el atributo 'precio'
            $data['precio'] = isset($data['producto']->precio) ? $data['producto']->precio : 0;
        } else {
            // En caso de que no se encuentre el producto, asignar un valor predeterminado al precio
            $data['precio'] = 0;
        }
    
        // Obtener todas las categorías para el uso del producto en el formulario
        $data['categorias'] = $categoriaModel->findAll();
    
        // Cargar la vista de edición con los datos del producto
        return  view('common/head') .
                view('common/administrador') .
                view ('producto/editar', $data) .
                view('common/footer');
    }
    
    public function update() {
        $productoModel = model('ProductoModel');
        $imagen_url = $this->request->getFile('imagen_url');
        $existingProduct = $productoModel->find($this->request->getPost('id'));
    
        if ($existingProduct) {
            if ($imagen_url->isValid() && !$imagen_url->hasMoved()) {
                $newName = $imagen_url->getRandomName();
                $imagen_url->move(ROOTPATH . 'public/uploads', $newName);
    
                // Eliminar la imagen anterior si existe
                if ($existingProduct->imagen_url && file_exists(ROOTPATH . 'public/uploads/' . $existingProduct->imagen_url)) {
                    unlink(ROOTPATH . 'public/uploads/' . $existingProduct->imagen_url);
                }
    
                $data['imagen_url'] = $newName;
            } else {
                // Conservar la imagen existente si no se carga una nueva
                $data['imagen_url'] = $existingProduct->imagen_url ?? ''; // Asignar un valor predeterminado si no hay imagen
            }
    
            // Resto de los datos
            $data['nombre'] = $this->request->getPost('nombre');
            $data['precio'] = $this->request->getPost('precio');
            $data['descripcion'] = $this->request->getPost('descripcion');
            $data['uso_producto'] = $this->request->getPost('uso_producto');
            $data['direccion_tienda'] = $this->request->getPost('direccion_tienda');
    
            $productoModel->update($this->request->getPost('id'), $data);
        }
        return redirect()->to('producto/consultar');
    }
         
}    