<div class="container form-container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="form-title">Agregar categoría</h2>
                <form action="<?= base_url('categoria/insert'); ?>" method="POST">
                    <?= csrf_field() ?>

                    <div class="mb-2">
                        <label for="nombre_categoria">Nombre de la categoria</label>
                        <select name="nombre_categoria" id="nombre_categoria" class="form-control form-control-sm form-input">
                            <option value="medicina">Medicina</option>
                            <option value="cosmetico">Cosmetico</option>
                            <option value="Consumo humano">Consumo humano</option>
                        </select>

                    <div class="mb-2">
                        <label for="nombre_marca" class="form-label">Nombre de la Marca</label>
                        <input type="text" class="form-control form-control-sm form-input" name="nombre_marca" id="nombre_marca">
                    </div>
                
                    <div class="mb-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control form-control-sm form-input">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div>

                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-success btn-lg btn-submit">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
