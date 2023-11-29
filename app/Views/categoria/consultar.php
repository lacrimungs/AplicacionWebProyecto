<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Categorías</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-pxf1fkIotxxlL6bsxKfWKn1pfOuPxx5ZhTbti5J1g4iYUx2Fv/w3FRRBJcBIeSWA" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 50px;
        }

             .table-custom th:first-child {
           
        }

        .table-custom {
            background-color: #388e3c; /* Cambia el color de la primera columna a verde oscuro */
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
            background-color: green;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-custom th,
        .table-custom td {
            padding: 0.5rem; /* Reducir el padding */
            text-align: left;
            border: 1px solid #dee2e6;
        }

        .table-custom th {
            background-color: #4caf50;
            color: #ffffff;
        }

        .table-custom tbody tr:hover {
            background-color: #f2f2f2;
        }

        .btn-editar {
            background-color: #ffc107; /* Cambiar el color a amarillo */
            border-color: #ffc107;
            color: #212529;
            padding: 0.3rem 0.5rem; /* Reducir el padding del botón */
        }

        .btn-editar:hover {
            background-color: #ffca2c;
            border-color: #ffca2c;
        }

        .btn-eliminar {
            background-color: #f44336;
            border-color: #f44336;
            color: #ffffff;
            padding: 0.3rem 0.5rem; /* Reducir el padding del botón */
        }

        .btn-eliminar:hover {
            background-color: #ef5350;
            border-color: #ef5350;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Categorias</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-custom">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre de la categoria</th>
                        <th>Nombre de la marca</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($categorias as $categoria): ?>
                            <tr>
                                <td><?= $categoria->nombre_categoria ?></td>
                                <td><?= $categoria->nombre_marca ?></td>
                                <td><?= $categoria->status ?></td>
                                <td>
                                    <a href="<?= base_url('categoria/editar/' . $categoria->id); ?>" class="btn btn-warning btn-editar">Editar</a>
                                    <a href="<?= base_url('categoria/delete/' . $categoria->id); ?>" class="btn btn-danger btn-eliminar">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
