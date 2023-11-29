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
        <div class="col">
            <h2>Listado de Productos en Inventario</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    <thead class="thead-dark">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Dirección de Tienda</th>
                        <th>Cantidad en Inventario</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto) : ?>
                        <tr>
                            <td><?= esc($producto->nombre) ?></td>
                            <td>
                                <?php if (!empty($producto->imagen_url)) : ?>
                                    <img src="<?= base_url('uploads/' . $producto->imagen_url) ?>" alt="Imagen del Producto" width="100">
                                <?php else : ?>
                                    Sin imagen
                                <?php endif; ?>
                            </td>
                            <td><?= esc($producto->direccion_tienda) ?></td>
                            <td>
                                <?php
                                $inventarioCantidad =15;
                                foreach ($inventarios as $inventario) {
                                    if ($inventario->id === $producto->id) {
                                        $inventarionum_producto_disponible = $inventario->num_producto_disponible;
                                        break;
                                    }
                                }
                                echo $inventarioCantidad;
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('inventario/editar/' . $producto->id); ?>" class="btn btn-warning" style="background-color: #ffc107; border-color: #ffc107;">Editar</a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

