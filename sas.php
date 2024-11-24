<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
</head>
<body>
    <h1>Tienda Virtual</h1>

    <?php
    // Definición de la clase base Producto
    class Producto {
        protected $nombre;
        protected $precio;

        public function __construct($nombre, $precio) {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getPrecio() {
            return $this->precio;
        }

        public function calcularTotal($cantidad) {
            return $this->precio * $cantidad;
        }
    }

    // Herencia: Clase específica para un tipo de producto, podríamos personalizarla más
    class ProductoFisico extends Producto {
        public function __construct($nombre, $precio) {
            parent::__construct($nombre, $precio);
        }
    }

    // Creación de productos como objetos
    $productos = [
        new ProductoFisico("Camiseta", 15),
        new ProductoFisico("Gorra", 10),
        new ProductoFisico("Pantalones", 20),
        new ProductoFisico("Zapatos", 30),
        new ProductoFisico("Mochila", 25),
    ];

    // Procesamiento del formulario si se ha enviado
    $totalCompra = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($productos as $index => $producto) {
            $cantidad = isset($_POST["cantidad_$index"]) ? intval($_POST["cantidad_$index"]) : 0;
            $totalCompra += $producto->calcularTotal($cantidad);
        }
    }
    ?>

    <!-- Formulario para seleccionar productos y cantidades -->
    <form method="post" action="">
        <?php foreach ($productos as $index => $producto): ?>
            <div class="product">
                <span><?php echo $producto->getNombre() . " - $" . $producto->getPrecio(); ?></span>
                <label>
                    Cantidad:
                    <input type="number" name="cantidad_<?php echo $index; ?>" min="0" value="0">
                </label>
            </div>
        <?php endforeach; ?>

        <input type="submit" value="Calcular Total">
    </form>

    <!-- Mostrar el total de la compra -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="total">
            Total de la compra: $<?php echo $totalCompra; ?>
        </div>
    <?php endif; ?>
</body>
</html>
