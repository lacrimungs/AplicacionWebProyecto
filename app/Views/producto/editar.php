<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('producto/update'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
            

                <!-- Aquí obtienes los datos del producto a editar -->
                <?php if (!empty($producto)) : ?>
                    <input type="hidden" name="id" value="<?= $producto->id ?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto->nombre ?>">
                    </div>

                    <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" name="precio" id="precio" value="<?= $precio ?>" placeholder="0.00">
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="imagen_url">Seleccionar imagen:</label>
                        <input type="file" class="form-control-file" id="imagen_url" name="imagen_url">
                        <!-- Aquí podrías mostrar la imagen actual si está almacenada -->
                        <?php if (!empty($producto->imagen_url)) : ?>
                            <img src="<?= base_url('uploads/' . $producto->imagen_url) ?>" alt="Imagen actual">
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion del Producto</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $producto->descripcion ?>">
                    </div>

                    <div class="mb-3">
                   <label for="uso_producto">Uso del producto</label>
                   <select name="uso_producto" id="uso_producto" class="form-control">
                   <option value="Medicina" <?= ($producto->uso_producto === 'Medicina') ? 'selected' : '' ?>>Medicina</option>
                   <option value="cosmetico" <?= ($producto->uso_producto === 'Cosmetico') ? 'selected' : '' ?>>Cosmetico</option>
                   <option value="Consumo humano" <?= ($producto->uso_producto === 'Consumo humano') ? 'selected' : '' ?>>Consumo humano</option>
                   </select>
                   </div>

                    <div class="mb-3">
                        <label for="direccion_tienda">Direccion de Tienda</label>
                        <select name="direccion_tienda" id="direccion_tienda" class="form-control">
                            <!-- Establecer la dirección de la tienda seleccionada -->
                            <option value="Plaza Crystal" <?= ($producto->direccion_tienda === 'Plaza Crystal') ? 'selected' : '' ?>>Plaza Crystal</option>
                            <option value="cuauhtemoc" <?= ($producto->direccion_tienda === 'cuauhtemoc') ? 'selected' : '' ?>>Cuauhtemoc</option>
                            <option value="allende" <?= ($producto->direccion_tienda === 'allende') ? 'selected' : '' ?>>Allende</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Actualizar">
                    </div>
                <?php else : ?>
                    <!-- Manejar la situación si no se encuentra el producto -->
                    <p>Producto no encontrado</p>
                <?php endif; ?>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
