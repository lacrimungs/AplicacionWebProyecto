<div class="container form-container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="form-title">Agregar Producto</h2>
            <form action="<?= base_url('producto/insert'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control form-control-sm form-input" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control form-control-sm form-input" name="precio" id="precio" placeholder="0.00">
                    </div>
                </div>

                <div class="form-group">
                    <label for="imagen_url">Seleccionar imagen:</label>
                    <input type="file" class="form-control-file" id="imagen_url" name="imagen_url">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion del Producto</label>
                    <input type="text" class="form-control form-control-sm form-input" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3">
                    <label for="uso_producto">Uso del producto</label>
                    <select name="uso_producto" id="uso_producto" class="form-control form-control-sm form-input">
                        <option value="Medicina">Medicina</option>
                        <option value="cosmetico">Cosmetico</option>
                        <option value="Consumo Humano">Consumo humano</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="direccion_tienda">Direccion de Tienda</label>
                    <select name="direccion_tienda" id="direccion_tienda" class="form-control form-control-sm form-input">
                        <option value="Plaza Crystal">Plaza Crystal</option>
                        <option value="cuauhtemoc">Cuauhtemoc</option>
                        <option value="allende">Allende</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success btn-lg btn-submit">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
