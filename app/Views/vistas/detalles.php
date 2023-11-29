<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas Mis Compras</title>
    <style>
        .table-custom {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-custom th,
    .table-custom td {
        padding: 0.75rem;
        text-align: left;
        border: 1px solid #dee2e6;
    }

    .table-custom th {
        background-color: #343a40;
        color: #ffffff;
    }

    .table-custom tbody tr:hover {
        background-color: #f2f2f2;
    }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Todas Mis Compras</h1>
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-custom">
         <thead class="thead-dark">
        <?php if (empty($compras)) : ?>
            <p>No hay compras registradas.</p>
        <?php else : ?>
            <table>
                <thead>
                    <tr>
                        <th>Nombre de la compra</th>
                        <th>Cantidad</th>
                        <th>Fecha de Compra</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($compras as $compra) : ?>
                        <tr>
                            <td><?= $compra->nombre_compra ?></td>
                            <td><?= $compra->cantidad ?></td>
                            <td><?= $compra->created_at ?></td>
                            <td>
                            <a href="<?= base_url('vistas/delete/' . $compra->id); ?>" class="btn btn-danger" style="background-color: #dc3545; border-color: #dc3545;">Cancelar Compra</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-pxf1fkIotxxlL6bsxKfWKn1pfOuPxx5ZhTbti5J1g4iYUx2Fv/w3FRRBJcBIeSWA" crossorigin="anonymous">
</body>
</html>
