<style>
    .table-custom img {
        width: 95px; /* Ajusta el tamaño según sea necesario */
        height: auto; /* Esto mantiene la proporción del tamaño */
    }

    .btn-group .btn {
        margin-bottom: 0; /* Eliminar el margen inferior de los botones */
    }

    /* Ajustes para los botones */
    .table-custom .btn {
        margin-bottom: 5px; /* Espaciado entre botones */
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Listado de Productos</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre del Producto</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Descripción</th>
                            <th>Uso del Producto</th>
                            <th>Dirección de la tienda</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <td><?= esc($producto->nombre) ?></td>
                                <td>$ <?= esc($producto->precio) ?></td> <!-- Agregamos el signo de pesos -->
                                <td>
                                    <?php if (!empty($producto->imagen_url)) : ?>
                                        <img src="<?= base_url('uploads/' . $producto->imagen_url) ?>" alt="Imagen del Producto">
                                    <?php else : ?>
                                        Sin imagen
                                    <?php endif; ?>
                                </td>
                                <td><?= esc($producto->descripcion) ?></td>
                                <td><?= esc($producto->uso_producto) ?></td>
                                <td><?= esc($producto->direccion_tienda) ?></td>
                                <td>
                                    <a href="<?= base_url('producto/editar/' . $producto->id); ?>" class="btn btn-warning" style="background-color: #ffc107; border-color: #ffc107;">Editar</a>
                                    <a href="<?= base_url('producto/delete/' . $producto->id); ?>" class="btn btn-danger" style="background-color: #dc3545; border-color: #dc3545;">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
