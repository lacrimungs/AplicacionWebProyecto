<style>
    .table-custom {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-custom th,
    .table-custom td {
        padding: 0.75rem;
        text-align: left;
        border: 1px solid #dee2e6;
    }

    .table-custom th {
        background-color: #343a40;
        color: #ffffff;
    }

    .table-custom tbody tr:hover {
        background-color: #f2f2f2;
    }

    .btn-editar {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #212529;
    }

    .btn-editar:hover {
        background-color: #ffca2c;
        border-color: #ffca2c;
    }

    .btn-eliminar {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #ffffff;
    }

    .btn-eliminar:hover {
        background-color: #bd2130;
        border-color: #bd2130;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Proveedores</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    <thead class="thead-dark">
                        <th>Nombre del Proveedor</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Género</th>
                        <th>ID de Categoria</th>
                        <th>ID de Producto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proveedores as $proveedor): ?>
                        <tr>
                            <td><?= $proveedor->nombre ?></td>
                            <td><?= $proveedor->apellidoP ?></td>
                            <td><?= $proveedor->apellidoM ?></td>
                            <td><?= $proveedor->telefono ?></td>
                            <td><?= $proveedor->direccion ?></td>
                            <td><?= $proveedor->genero ?></td>
                            <td><?= $proveedor->categoria_id ?></td>
                            <td><?= $proveedor->producto_id ?></td>
                            <td>
                                <a href="<?= base_url('proveedor/editar/' . $proveedor->id); ?>" class="btn btn-warning" style="background-color: #ffc107; border-color: #ffc107;">Editar</a>
                                <a href="<?= base_url('proveedor/delete/' . $proveedor->id); ?>" class="btn btn-danger" style="background-color: #dc3545; border-color: #dc3545;">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-pxf1fkIotxxlL6bsxKfWKn1pfOuPxx5ZhTbti5J1g4iYUx2Fv/w3FRRBJcBIeSWA" crossorigin="anonymous">


