<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompraModel;

class vistas extends BaseController 
{

    protected $session;

    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function index() {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->findAll();
        return view('common/head') 
        . view('common/usuario')
        . view('vistas/index', $data) 
        . view('common/footer');
    }
    
    public function agregaralcarrito($id_del_producto_seleccionado) {
        // Agregar el ID del producto seleccionado a la sesión
        $this->session->set('producto_seleccionado', $id_del_producto_seleccionado);

    }

    public function productos() {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->findAll(); // Obtiene todos los productos
        return view('common/head')
            . view('common/usuario')
            . view('vistas/productos', $data) // Vista para mostrar todos los productos
            . view('common/footer');
    }

    public function productosconsumohumano() {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->where('uso_producto', 'Consumo humano')->findAll();
        return view('common/head') 
        . view('common/usuario') 
        . view('vistas/productosconsumohumano', $data) 
        . view('common/footer');
    }

    
    public function productosmedicina() {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->where('uso_producto', 'Medicina')->findAll();
        return view('common/head') 
        . view('common/usuario') 
        . view('vistas/productosmedicina', $data) 
        . view('common/footer');
    }

        
    public function productoscosmetico() {
        $productoModel = model('ProductoModel');
        $data['productos'] = $productoModel->where('uso_producto', 'Cosmetico')->findAll();
        return view('common/head') 
        . view('common/usuario') 
        . view('vistas/productoscosmetico', $data) 
        . view('common/footer');
    }
    
    public function comprar($id_seleccionado) {
        $productoModel = model('ProductoModel');
    
        // Buscar el producto por su ID
        $productoSeleccionado = $productoModel->find($id_seleccionado);
        
        if ($productoSeleccionado) {
            // Pasar los datos del producto a la vista
            $data['producto'] = $productoSeleccionado;
        
            // Renderizar la vista 'vistas/comprar' con los datos
            return view('common/head')
                . view('common/usuario')
                . view('vistas/comprar', $data)
                . view('common/footer');
        } else {
            // Manejar la situación en la que el producto no se encuentra
            return "El producto no fue encontrado.";
        }
    }
    
    public function compras() {
        $compraModel = model('CompraModel');
        
        // Obtener todas las compras realizadas
        $compras = $compraModel->findAll();
    
        // Preparar los datos para la vista
        $data['compras'] = $compras;
        
        return view('common/head') 
            . view('common/usuario') 
            . view('vistas/detalles', $data)  // Vista que mostrará todas las compras
            . view('common/footer');
    }
    
    public function delete($id) {
        $compraModel = model('CompraModel');
        $compraModel->delete($id);
        return redirect('vistas/compras');
    }
}    