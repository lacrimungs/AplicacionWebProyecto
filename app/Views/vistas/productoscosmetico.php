<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de cosmetico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            box-sizing: border-box;
        }

        .producto {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            width: calc(25% - 20px);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .imagen-container {
            height: 150px; /* Tamaño fijo para todas las imágenes */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .imagen-container img {
            width: auto;
            height: 100%; /* Para que la imagen se ajuste al contenedor */
            object-fit: contain; /* Ajusta la imagen sin recortar */
        }

        .producto h2 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .producto p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #666;
        }

        .cantidad-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            justify-content: center;
        }

        .cantidad-container label {
            margin-right: 10px;
        }

        .cantidad-container input[type="number"] {
            width: 50px;
            padding: 5px;
            font-size: 14px;
        }

        .producto button {
            padding: 10px;
            font-size: 14px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: center;
        }

        .producto button:hover {
            background-color: #2E6AC3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?= $producto->nombre ?></h2>
                <div class="imagen-container">
                    <?php if (!empty($producto->imagen_url)) : ?>
                        <img src="<?= base_url('uploads/' . $producto->imagen_url) ?>" alt="Imagen del Producto">
                    <?php else : ?>
                        Sin imagen
                    <?php endif; ?>
                </div>
                <p>Precio: $<?= $producto->precio ?></p>
                <p>Descripción: <?= $producto->descripcion ?></p>
                <button class="agregar-carrito" data-producto="<?= $producto->id ?>">Agregar al carrito</button>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Obtener todos los botones con la clase agregar-carrito
            const botones = document.querySelectorAll('.agregar-carrito');

            // Para cada botón, agregar un listener al evento de clic
            botones.forEach(boton => {
                boton.addEventListener('click', () => {
                    // Obtener el ID del producto desde el atributo data-producto
                    const productoId = boton.getAttribute('data-producto');
                    
                    // Redirigir al usuario al controlador de compras con el ID del producto
                    window.location.href = `/vistas/comprar/${productoId}`;
                });
            });
        });
    </script>
</body>
</html>

