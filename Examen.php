<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <form action="Examen.php" method="post">
        <label for="">Ingresa la cantidad de: Computadoras</label>
        <br>
        <input type="number" name="cantidad_computadoras" min="0">
        <br>
        <label for="">Ingresa la cantidad de: Consola XBOX Series S</label>
        <br>
        <input type="number" name="cantidad_xbox" min="0">
        <br>
        <label for="">Ingresa la cantidad de: Consola PlayStation 5</label>
        <br>
        <input type="number" name="cantidad_playstation" min="0">
        <br>
        <label for="">Ingresa la cantidad de: Procesador Intel 12400K</label>
        <br>
        <input type="number" name="cantidad_procesadorintel" min="0">
        <br>
        <label for="">Ingresa la cantidad de: Procesador Ryzen 5 3600</label>
        <br>
        <input type="number" name="cantidad_procesadorryzen" min="0">
        <br>
        <label for="">Cantidad de dildos xd</label>
        <br>
        <input type="number" name="cantidad_penes">
        <br>
        <input type="submit" value="Calcular Total">
        <br>

    </form>

    <?php
    interface Cobro {
        const MONEDA = "Pesos";

        public function asignarPrecio($precio);
        public function calcularCobro();
    }

    class CuentaCompras implements Cobro {
        private $precio;
        private $cantidad;

        public function asignarPrecio($precio) {
            $this->precio = $precio;
        }

        public function asignarCantidad($cantidad) {
            $this->cantidad = $cantidad;
        }

        public function calcularCobro() {
            return $this->precio * $this->cantidad;
        }
    }

    $totalCompra = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Producto 1: Computadoras
        $compraComputadora = new CuentaCompras();
        $compraComputadora->asignarPrecio(20000);
        $compraComputadora->asignarCantidad(isset($_POST['cantidad_computadoras']) ? intval($_POST['cantidad_computadoras']) : 0);
        $totalCompra += $compraComputadora->calcularCobro();

        // Producto 2: Consola XBOX Series S
        $compraXbox = new CuentaCompras();
        $compraXbox->asignarPrecio(10000);
        $compraXbox->asignarCantidad(isset($_POST['cantidad_xbox']) ? intval($_POST['cantidad_xbox']) : 0);
        $totalCompra += $compraXbox->calcularCobro();

        // Producto 3: Consola PlayStation 5
        $compraPlaystation = new CuentaCompras();
        $compraPlaystation->asignarPrecio(27000);
        $compraPlaystation->asignarCantidad(isset($_POST['cantidad_playstation']) ? intval($_POST['cantidad_playstation']) : 0);
        $totalCompra += $compraPlaystation->calcularCobro();

        // Producto 4: Procesador Intel 12400K
        $compraIntel = new CuentaCompras();
        $compraIntel->asignarPrecio(15000);
        $compraIntel->asignarCantidad(isset($_POST['cantidad_procesadorintel']) ? intval($_POST['cantidad_procesadorintel']) : 0);
        $totalCompra += $compraIntel->calcularCobro();

        // Producto 5: Procesador Ryzen 5 3600
        $compraRyzen = new CuentaCompras();
        $compraRyzen->asignarPrecio(17000);
        $compraRyzen->asignarCantidad(isset($_POST['cantidad_procesadorryzen']) ? intval($_POST['cantidad_procesadorryzen']) : 0);
        $totalCompra += $compraRyzen->calcularCobro();

        $comprapene = new CuentaCompras();
        $comprapene->asignarPrecio(100000);
        $comprapene->asignarCantidad(isset($_POST['cantidad_penes']) ? intval($_POST['cantidad_penes']) : 0);
        $totalCompra += $comprapene->calcularCobro();

        // Mostrar el total final
        echo "<div><strong>Total de la compra:</strong> $totalCompra " . Cobro::MONEDA . "</div>";
    }
    ?>
</body>
</html>

