<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categoria extends BaseController
{
    public function index()
    {
        //
    }

    public function consultar()
    {
        $categoriaModel = model('CategoriaModel');
        $data['categorias'] = $categoriaModel->findAll();
        return view('common/head') .
            view('common/administrador') .
            view('categoria/consultar', $data) .
            view('common/footer');
    }

    public function agregar()
    {
        return view('common/head') .
            view('common/administrador') .
            view('categoria/agregar') .
            view('common/footer');
    }

    public function insert()
    {
        $categoriaModel = model('CategoriaModel');
        $data = [
            "nombre_categoria" => $_POST['nombre_categoria'],
            "nombre_marca" => $_POST['nombre_marca'],
            "status" => $_POST['status'],
        ];
        $categoriaModel->insert($data, false);
        return redirect()->to('categoria/consultar');
    }

    public function delete($id)
    {
        $categoriaModel = model('CategoriaModel');
        $categoriaModel->delete($id);
        return redirect()->to('categoria/consultar');
    }

    public function editar($id)
    {
        $categoriaModel = model('CategoriaModel');
        $data['categoria'] = $categoriaModel->find($id);

        return view('common/head') .
            view('common/administrador') .
            view('categoria/editar', $data) .
            view('common/footer');
    }
   

    public function update()
{
    $categoriaModel = model('CategoriaModel');

    $data = [
        "nombre_categoria" => $this->request->getPost('nombre_categoria'),
        "nombre_marca" => $this->request->getPost('nombre_marca')
    ];

    $id = $this->request->getPost('id');

    var_dump($data); // Verifica si los datos están llegando correctamente
    var_dump($id);   // Verifica si el ID está llegando correctamente

    $categoriaModel->where('id', $id)->set($data)->update();
    return redirect()->to('categoria/consultar');
}

   
}
