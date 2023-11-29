<div style="border: 1px solid #ccc; border-radius: 3px; margin: 15px auto 5px; padding: 5px; background-color: #fff; width: 70%;">
    <?php if (isset($producto)) : ?>
        <div style="text-align: center;">
            <h2 style="margin-bottom: 8px;"><?= $producto->nombre ?></h2>
            <?php if (!empty($producto->imagen_url)) : ?>
                <img src="<?= base_url('uploads/' . $producto->imagen_url) ?>" alt="Imagen del Producto" style="max-width: 100%;">
            <?php else : ?>
                <p>Sin imagen disponible</p>
            <?php endif; ?>
            <p style="margin-top: 15px;">Precio: $<?= number_format($producto->precio, 2) ?> MXN</p>
            <p>Descripción: <?= $producto->descripcion ?></p>
            <form action="/vistas/comprar" method="POST">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc; width: 50px; margin-bottom: 15px; text-align: center;">
                <!-- Botón para realizar la compra -->
                <button type="submit" style="padding: 8px 16px; background-color: #28a745; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                    Realizar Compra
                </button>
            </form>
        </div>
    <?php else : ?>
        <p>El producto no fue encontrado.</p>
    <?php endif; ?>
</div>

