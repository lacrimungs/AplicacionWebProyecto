<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('distribuidor/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= $distribuidor->id; ?>" />

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del distribuidor</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $distribuidor->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" value="<?= $distribuidor->apellidoP; ?>">
                </div>

                <div class="mb-3">
                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM" id="apellidoM" value="<?= $distribuidor->apellidoM; ?>">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?= $distribuidor->telefono; ?>">
                </div>

                <div class="mb-3">
                    <label for="region_distribuidora" class="form-label">Region Distribuidora</label>
                    <input type="text" class="form-control" name="region_distribuidora" id="region_distribuidora" value="<?= $distribuidor->region_distribuidora ?>">
                </div>

                <div class="mb-3">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control">
                        <option value="Hombre" <?= ($distribuidor->genero == 'Hombre') ? 'selected' : ''; ?>>Hombre</option>
                        <option value="Mujer" <?= ($distribuidor->genero == 'Mujer') ? 'selected' : ''; ?>>Mujer</option>
                    </select>
                </div>

                <div class="mb-3">
                <label for="categoria_id" class="form-label">ID de Categoria</label>
                <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria) : ?>
                            <option value="<?= $categoria->id  ?>" <?= ($categoria->id  ?? '') == $categoria->id  ? 'selected' : '' ?>>
                                <?= $categoria->id ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                <label for="producto_id" class="form-label">ID de Producto</label>
                <select name="producto_id" class="form-control">
                <?php foreach ($productos as $producto) : ?>
                <option value="<?= $producto->id ?>" <?= ($producto->id == $distribuidor->producto_id) ? 'selected' : '' ?>>
                <?= $producto->id ?>
               </option>
               <?php endforeach ?>
               </select>
               </div>

               
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>