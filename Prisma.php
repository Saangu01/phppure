<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisma</title>
</head>
    <script>
        function menu(){
            window.location.replace("Volumen.php");
        }
    </script>

    <input type="button" value="Volver" name="volver" onclick="menu()">
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
    </style>

<form action="Prisma.php" method="post">
        <h1>Volumen de un Prisma Triangular</h1>
        <label for="">Ingresa el lado</label>
        <input type="number" name="base_prisma" id="base_prisma">
        <br>
        <label for="">Ingresa la altura</label>
        <input type="number" name="altura_prisma" id="altura_prisma">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        include ('funciones.php');
    ?>
</body>
</html>