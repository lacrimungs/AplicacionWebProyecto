<div class="container form-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="form-title">Agregar Distribuidor</h2>
            <form action="<?= base_url('distribuidor/insert'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-2">
                    <label for="nombre" class="form-label">Nombre del Distribuidor</label>
                    <input type="text" class="form-control form-control-sm form-input" name="nombre" id="nombre">
                </div>

                <div class="mb-2">
                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control form-control-sm form-input" name="apellidoP" id="apellidoP">
                </div>

                <div class="mb-2">
                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control form-control-sm form-input" name="apellidoM" id="apellidoM">
                </div>

                <div class="mb-2">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control form-control-sm form-input" name="telefono" id="telefono">
                </div>

                <div class="mb-2">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control form-control-sm form-input" name="direccion" id="direccion">
                </div>

                <div class="mb-2">
                    <label for="genero">Género</label>
                    <select name="genero" id="genero" class="form-control form-control-sm form-input">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-success btn-sm btn-submit" value="Registrar Distribuidor">
                </div>

            </form>
        </div>
    </div>
</div>
