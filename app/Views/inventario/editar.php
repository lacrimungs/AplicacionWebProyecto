<!-- archivo inventario_editar.php -->

<style>
    /* Estilos CSS (puedes dejarlos intactos) */
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Editar Cantidad en Inventario</h2>
            <form action="<?= base_url('inventario/update/' . $inventario->id); ?>" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($inventario->nombre) ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen:</label><br>
                    <?php if (!empty($inventario->imagen_url)) : ?>
                        <img src="<?= base_url('uploads/' . $inventario->imagen_url) ?>" alt="Imagen del Producto" width="100">
                    <?php else : ?>
                        Sin imagen
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="direccion_tienda">Dirección de Tienda:</label>
                    <input type="text" class="form-control" id="direccion_tienda" name="direccion_tienda" value="<?= esc($inventario->direccion_tienda) ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad en Inventario:</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?= $inventario->cantidad ?>">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>

