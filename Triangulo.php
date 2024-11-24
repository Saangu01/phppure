<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de un triangulo</title>
</head>

    <script>
        function menu(){
            window.location.replace("Areas.php");
        }
    </script>
    
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
            color: #f3f3f3;
            background-color: #406F6C;
            border-radius: 12px;
            padding: 2px;
        }
    </style>

<body>
    <input type="button" value="Volver" name="volver" onclick="menu()">
    <div class="contenido">
    <form action="Triangulo.php" method="post">
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
    </div>
    

    
    <?php
        include('funciones.php');
    ?>
</body>
</html>