<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometria</title>
</head>

    <script>
        function menu(){
            window.location.replace("Index.php");
        }
    </script>

    

<body>
    <style>
        .imagen{
            height: 200px;
            width: 200px;
            padding: 3px;
        }

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
            padding: 3px;
            color: #ffffff;
            border-radius: 5px;
        }

        .fondo{
            background-color: rgba(207, 214, 213, .3);
            border-radius: 5px;
        }
    </style>
    <h1>G e o m e t r i a</h1>

    <input type="button" value="Volver" name="volver" onclick="menu()">

    
    <br>
    <br>
    <form action="Geometria.php" method="GET">
        <h1>Teorema de Tales</h1>
        <label for="">Ingresa el valor de A
            <input type="number" name="a2">
        </label>
        <br>
        <label for="">Ingresa el valor de B
            <input type="number" name="b2">
        </label>
        <br>
        <label for="">Ingresa el valor de C
            <input type="number" name="c2">
        </label>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>