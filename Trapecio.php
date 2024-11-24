<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapecio</title>
</head>

    <script>
        function menu(){
            window.location.replace("Areas.php");
        }
    </script>

    <input type="button" value="Volver" name="volver" onclick="menu()">

<body>
    <style>
        body{
            background-color: #2b2b2b;
            color: #f3f3f3;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        input{
            background-color: #89E589;
            color: #2b2b2b;
            border-radius: 2px;
            height: 50px;
            width: 100px;
            padding: 5px;
            border-radius: 5px;
            border-bottom: none;
        }

        input:hover{
            background-color: #4E874E;
            color: #f3f3f3;
            border-radius: 5px;
            border-bottom: none;
            padding: 5px;
        }
    </style>
    <div class="contenido">
    <form action="Trapecio.php" method="post">
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
    </div>
    

    <?php
        include ('funciones.php');
    ?>
</body>
</html>