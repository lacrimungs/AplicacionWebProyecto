<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Verde</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/sesion/logout">Cerrar Sesión</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/producto/agregar">Agregar Productos</a></li>
                        <li><a class="dropdown-item" href="/producto/consultar">Consultar Productos</a></li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/inventario/consultar">Inventario</a>
                    </li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Proveedor
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/proveedor/agregar">Agregar Proveedor</a></li>
                        <li><a class="dropdown-item" href="/proveedor/consultar">Consultar Proveedor</a></li>
                    </ul>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Distribuidor
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/distribuidor/agregar">Agregar Distribuidor</a></li>
                        <li><a class="dropdown-item" href="/distribuidor/consultar">Consultar Distribuidor</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categoría
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/categoria/agregar">Agregar Categoría</a></li>
                        <li><a class="dropdown-item" href="/categoria/consultar">Consultar Categoría</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
