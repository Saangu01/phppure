<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sas</title>
</head>
<body>
    <form action="a.php" method="post">
        <label for="">Ingresa la cantidad de fresas</label>
        <input type="number" name="cantidad_fresas" min="0">
        <br>
        <label for="">Ingresa la cantidad de kiwis</label>
        <input type="number" name="cantidad_kiwis" min="0">
        <br>
        <input type="submit" value="Comprar">
    </form>

    <?php
        interface Frutas{
            const MONEDA = "Soles";

            public function asignarprecio($precio);
            public function calculartotal();
        }

        class CuentaT implements Frutas{
            private $cantidad;
            private $precio;

            public function asignarprecio($precio)
            {
                $this->precio = $precio;
            }

            public function asginarcantidad($cantidad)
            {
                $this->cantidad = $cantidad;
            }

            public function calculartotal()
            {
                return $this->precio * $this->cantidad;
            }
        }

        $total = 0;

            $compra_fresa = new CuentaT();
            $compra_fresa -> asignarprecio(30);
            $compra_fresa -> asginarcantidad((isset($_POST['cantidad_fresas']) && intval($_POST['cantidad_fresas'])));
            $total += $compra_fresa -> calculartotal();

            $compra_kiwis = new CuentaT();
            $compra_kiwis -> asignarprecio(80);
            $compra_kiwis -> asginarcantidad((isset($_POST['cantidad_kiwis']) && intval($_POST['cantidad_kiwis'])));
            $total += $compra_kiwis -> calculartotal();

            print "El total de la compra es: $total ".Frutas::MONEDA;
        
    ?>
</body>
</html>