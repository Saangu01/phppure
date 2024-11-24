<?php
    //Función sin parametros
    function papu(){
        print "tu ere wasa wasa <br>";
        print "wasa wasa <br>";
    }

    print papu();

    //Función con parametros
    function sumeishon($num1, $num2){
        return $num1 + $num2;
    }

    print sumeishon(1, 7);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papuuuuuuuuuu</title>
</head>
<body>
    <style>
        body{
            background-color: #2b2b2b;
            color: #f1f1f1;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
    <form action="XD.php" method="$_GET">
        <input type="number" name="valor">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
        function ciclo($b){
            for ($i = 0; $i <$b ; $i++){
                print $i;
            }
        }
        ciclo($valor);
    }
    ?>
</body>
</html>