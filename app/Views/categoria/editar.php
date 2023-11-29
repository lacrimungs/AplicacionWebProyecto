<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .form-container {
            margin-top: 50px;
            border: 2px solid #28a745;
            padding: 20px;
            border-radius: 10px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #28a745;
        }

        .form-input {
            border-color: #28a745;
        }

        .btn-submit {
            background-color: #28a745;
            border-color: #28a745;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="form-title">Editar categoría</h2>
                <form action="<?= base_url('categoria/update'); ?>" method="POST">
                    <?= csrf_field() ?>

                 <div class="mb-2">
                  <label for="nombre_categoria">Nombre de la categoría</label>
                  <select name="nombre_categoria" id="nombre_categoria" class="form-control form-control-sm form-input">
                  <option value="medicina" <?= ($categoria->nombre_categoria == 'medicina') ? 'selected' : '' ?>>Medicina</option>
                  <option value="cosmetico" <?= ($categoria->nombre_categoria == 'cosmetico') ? 'selected' : '' ?>>Cosmético</option>
                  <option value="consumo_humano" <?= ($categoria->nombre_categoria == 'consumo_humano') ? 'selected' : '' ?>>Consumo humano</option>
                  </select>
                  </div>
                  
                    <div class="mb-2">
                        <label for="nombre_marca" class="form-label">Nombre de la Marca</label>
                        <input type="text" class="form-control form-control-sm form-input" name="nombre_marca" id="nombre_marca" value="<?= $categoria->nombre_marca ?>">
                    </div>
                
                    <div class="mb-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control form-control-sm form-input">
                            <option value="1" <?= $categoria->status == '1' ? 'selected' : '' ?>>1</option>
                            <option value="0" <?= $categoria->status == '0' ? 'selected' : '' ?>>0</option>
                        </select>
                    </div>

                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-success btn-lg btn-submit" value="Actualizar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>


