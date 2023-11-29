<div class="container form-container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="form-title">Agregar Proveedor</h2>
            <form action="<?= base_url('proveedor/insert'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-2">
                    <label for="nombre" class="form-label">Nombre del Proveedor</label>
                    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre">
                </div>

                <div class="mb-2">
                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control form-control-sm" name="apellidoP" id="apellidoP">
                </div>

                <div class="mb-2">
                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control form-control-sm" name="apellidoM" id="apellidoM">
                </div>

                <div class="mb-2">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control form-control-sm" name="telefono" id="telefono">
                </div>

                <div class="mb-2">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion">
                </div>

                <div class="mb-2">
                    <label for="genero">Género</label>
                    <select name="genero" id="genero" class="form-control form-control-sm">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>
                      
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">ID de Categoria</label>
                    <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria) : ?>
                            <option value="<?= $categoria->id ?>"><?= $categoria->id ?></option>
                        <?php endforeach ?>
                    </select>
                </div> 

                <div class="mb-3">
                    <label for="producto_id" class="form-label">ID de producto</label>
                    <select name="producto_id" class="form-control">
                        <?php foreach($productos as $producto) : ?>
                            <option value="<?= $producto->id ?>"><?= $producto->id ?></option>
                        <?php endforeach ?>
                    </select>
                </div> 

                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>
        </div>
    </div>
</div>
