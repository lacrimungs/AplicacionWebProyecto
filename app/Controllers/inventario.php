<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InventarioModel;

class Inventario extends BaseController
{
    public function index()
    {
        // ...
    }

    public function consultar()
    {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->findAll();
        
        $inventarioModel = model('InventarioModel');
        if ($inventarioModel !== null) {
            $data['inventarios'] = $inventarioModel->findAll();
        } else {
            $data['inventarios'] = [];
        }
    
        return view('common/head') .
            view('common/administrador') .
            view('inventario/consultar', $data) .
            view('common/footer');
    }
    

    public function editar($id)
    {
        $productoModel = model('ProductoModel');
        $data = [];
    
        try {
            if ($productoModel !== null) {
                $producto = $productoModel->find($id);
                if ($producto !== null) {
                    $data['producto'] = $producto;
                    
                    // Cargar la vista con los datos del producto para edición
                    return view('common/head') .
                        view('common/administrador') .
                        view('inventario/editar', $data) .
                        view('common/footer');
                } else {
                    echo "El producto con ID $id no fue encontrado.";
                }
            } else {
                echo "Error al cargar el modelo de producto.";
            }
        } catch (\Throwable $e) {
            echo "Error al recuperar el producto: " . $e->getMessage();
        }
    }

    public function update()
    {
        $productoModel = model('ProductoModel');
        $inventarioModel = model('InventarioModel');
    
        $existingProduct = $productoModel->find($this->request->getPost('id'));
    
        if ($existingProduct) {
            $inventario = $inventarioModel->find($existingProduct->id);
    
            if ($inventario) {
                $data['cantidad'] = $this->request->getPost('cantidad');
                $inventarioModel->update($inventario->id, $data);
            } else {
                $data = [
                    'producto_id' => $existingProduct->id,
                    'cantidad' => $this->request->getPost('cantidad')
                ];
                $inventarioModel->insert($data);
            }
    
            $dataProducto['nombre'] = $this->request->getPost('nombre');
            $dataProducto['direccion_tienda'] = $this->request->getPost('direccion_tienda');
            $dataProducto['imagen_url'] = $existingProduct->imagen_url ?? '';
    
            $productoModel->update($existingProduct->id, $dataProducto);
        }
        
        return redirect()->to('inventario/consultar');
    }
}
