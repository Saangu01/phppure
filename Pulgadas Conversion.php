<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulgadas Conversión</title>
</head>

    <script>
        function menu(){
            window.location.replace("Conversiones.php");
        }
    </script>
<body>
    <style>
        body {
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

        .contenido {
            background-color: #3F4343;
            padding: 10px;
            color: #ffffff;
            border-radius: 5px;
        }

        .fondo{
            background-color: rgba(207, 214, 213, .3);
            border-radius: 5px;
        }
    </style>
    <input type="button" value="Volver" name="volver" onclick="menu()"><br>
        <form action="Pulgadas Conversion.php" method="post">
            <label for="">Ingresa la cantidad de Pulgadas</label>
            <input type="number" name="pulgadas" step="0.01">
            <br>
            <input type="submit" value="Calcular" name="calcular">
        </form>

    <?php
        include ('funciones.php');
    ?>
</body>
</html>