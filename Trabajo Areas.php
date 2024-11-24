<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas de figuras geometricas</title>
</head>
<body>

    <style>
        body {
        text-align: center;
        color: #f3f3f3;
        background-color: #2b2b2b;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>

    <h1>Calculadora de areas de diferentes figuras geometricas</h1>
    <br>

    

    <form action="Areas.php" method="post">
        <h1>Area de un triangulo</h1>
        <label for=""> Ingresa la base</label>
            <input type="number" name="base_triangulo" id=base_triangulo>
            <br>
        <label for=""> Ingresa la altura</label>
            <input type="number" name="altura_triangulo" id="altura_triandulo">
            <br>
            <input type="submit" value="Calcular">
            <br>
    </form>

    <form action="Areas.php">
        <h1>Area de un cuadrado</h1>
        <label for="">Ingresa el lado</label>
        <input type="number" name="lado_cuadrado" id="lado_cuadrado">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <form action="Areas.php">
        <h1>Area de un rectangulo</h1>
        <label for="">Ingresa la base</label>
        <input type="number" name="base_rectangulo" id="base_rectangulo">
        <br>
        <label for="">Ingresa la altura</label>
        <input type="number" name="altura_rectangulo" id="altura_rectangulo">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <form action="Areas.php">
        <h1>Area de un circulo</h1>
        <label for="">Ingresa el radio</label>
        <input type="number" name="radio_circulo" id="radio_circulo">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <form action="Areas.php">
        <h1>Area de un trapecio</h1>
        <label for="">Ingresa la base mayor</label>
        <input type="number" name="base_mayor" id="base_mayor">
        <br>
        <label for="">Ingresa la base menor</label>
        <input type="number" name="base_menor" id="base_menor">
        <br>
        <label for="">Ingresa la altura</label>
        <input type="number" name="altura_trapecio" id="altura_trapecio">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <form action="Areas.php">
        <h1>Area de un poligono regular</h1>
        <label for="">Ingresa el perimetro</label>
        <input type="number" name="perimetro" id="perimetro_poligono">
        <br>
        <label for="">Ingresa el apotema</label>
        <input type="number" name="apotema" id="apotema_poligono">
        <br>
        <input type="submit" value="Calcular">
    </form>


    <?php
    
    //Triangulo

        if (isset($_POST['base_triangulo']) || ($_POST['altura_triangulo'])){

            intval($base_triangulo0 = $_POST['base_triangulo']);
            intval($altura_triangulo0 = $_POST['altura_triangulo']);
            function respuesta1($base_triangulo0, $altura_triangulo0){
                $resultado1 = ($base_triangulo0 * $altura_triangulo0) / 2;
                print "El area del triangulo es: $resultado1";
            }
            respuesta1($base_triangulo0, $altura_triangulo0);
        }

    //Cuadrado

        if (isset($_POST['lado_cuadrado'])){

            intval($lado_cuadrado0 = $_POST['lado_cuadrado']);
            function respuesta2($lado_cuadrado0){
                $resultado2 = ($lado_cuadrado0 * 4);
                print "El area del cuadrado es: $resultado2";
            }
            respuesta2($lado_cuadrado0);
        }

    //Rectangulo
        
        if (isset($_POST['base_rectangulo']) || ($_POST['altura_rectangulo'])){

            intval($base_rectangulo0 = $_POST['base_rectangulo']);
            intval($altura_rectangulo0 = $_POST['altura_rectangulo']);
            function respuesta3($base_rectangulo0, $altura_rectangulo0){
                $resultado3 = ($base_rectangulo0 * $altura_rectangulo0);
                print "El area del rectangulo es: $resultado3";
            }
            respuesta3($base_rectangulo0, $altura_rectangulo0);
        }

    //Circulo

        if (isset($_POST['radio_circulo'])){

            intval($radio_circulo0 = $_POST['radio_circulo']);
            function respuesta4($radio_circulo0){
                $pi = 3.1416;
                $resultado4 = ($pi * $radio_circulo0) ** 2;
                print "El area del circulo es: $resultado4";
            }
            respuesta4($radio_circulo0);
        }

    //Trapecio

        if (isset($_POST['base_mayor']) && ($_POST['base_menor']) && ($_POST['altura_trapecio'])){

            intval($b1 = $_POST['base_mayor']);
            intval($b2 = $_POST['base_menor']);
            intval($altura_trapecio0['altura_trapecio']);
            function respuesta5($b1, $b2, $altura_trapecio0){
                $resultado5 = ($b1 + $b2) / 2*$altura_trapecio0;
                print "El area del trapecio es: $resultado5";
            }
            respuesta5($b1, $b2, $altura_trapecio0);
        }

    //Poligono Regular

        if (isset($_POST['perimetro_poligono']) || ($_POST['apotema_poligono'])){
            intval($perimetro0 = $_POST['perimetro_poligono']);
            intval($apotema0 = $_POST['apotema_poligono']);
            function respuesta6($perimetro0, $apotema0){
                $resultado6 = ($perimetro0 * $apotema0) / 2;
                print "El area del poligono regular es: $resultado6";
            }
            respuesta6($perimetro0, $apotema0);
        }
    ?>
</body>
</html>