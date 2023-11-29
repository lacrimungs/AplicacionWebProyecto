<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class distribuidor extends BaseController
{
    public function index()
    {
        //
    }

    public function consultar()
    {
        $distribuidorModel = model('DistribuidorModel');
        $data['distribuidores'] = $distribuidorModel->findAll();
        return view('common/head') .
            view('common/administrador') .
            view('distribuidor/consultar', $data) .
            view('common/footer');
    }

    public function agregar()
    {
        helper(['form', 'url']);
        $categoriaModel = model('CategoriaModel');
        $productoModel = model('ProductoModel');

        $data['categorias'] = $categoriaModel->findAll();
        $data['productos'] = $productoModel->findAll();

        return view('common/head')
            . view('common/administrador')
            . view('distribuidor/agregar', $data)
            . view('common/footer');
    }

    public function insert()
    {
        $distribuidorModel = model('DistribuidorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoP" => $_POST['apellidoP'],
            "apellidoM" => $_POST['apellidoM'],
            "telefono" => $_POST['telefono'],
            "region_distribuidora" => $_POST['region_distribuidora'],
            "genero" => $_POST['genero'],
            "categoria_id" => $_POST['categoria_id'],
            "producto_id" => $_POST['producto_id']
        ];
        $distribuidorModel->insert($data, false);
        return redirect('distribuidor/consultar');
    }

    public function delete($id)
    {
        $distribuidorModel = model('DistribuidorModel');
        $distribuidorModel->delete($id);
        return redirect('distribuidor/consultar');
    }

    public function editar($id)
    {
        $distribuidorModel = model('DistribuidorModel');
        $categoriaModel = model('CategoriaModel');
        $productoModel = model('ProductoModel');

        $data['distribuidor'] = $distribuidorModel->find($id);
        $data['categorias'] = $categoriaModel->findAll();
        $data['productos'] = $productoModel->findAll();

        return view('common/head') .
            view('common/administrador') .
            view('distribuidor/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $distribuidorModel = model('DistribuidorModel');

        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoP" => $_POST['apellidoP'],
            "apellidoM" => $_POST['apellidoM'],
            "telefono" => $_POST['telefono'],
            "region_distribuidora" => $_POST['region_distribuidora'],
            "genero" => $_POST['genero'],
            "categoria_id" => $_POST['categoria_id'],
            "producto_id" => $_POST['producto_id']
        ];

        $distribuidorModel->update($_POST['id'], $data);
        return redirect('distribuidor/consultar');
    }
}
