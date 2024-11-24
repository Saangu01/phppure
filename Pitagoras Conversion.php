<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teorema de Pitagoras Conversión</title>
</head>
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
            padding: 3px;
            color: #ffffff;
            border-radius: 5px;
        }

        .fondo{
            background-color: rgba(207, 214, 213, .3);
            border-radius: 5px;
        }
    </style>
    <form action="Pitagoras Conversion.php" method="post">
        <h1>Teorema de Pitagoras</h1>
        <label for="">Ingresa el valor de A 
            <input type="number" name="a1">
        </label>
        <br>
        <label for="">Ingresa el valor de B 
            <input type="number" name="b1">
        </label>
        <br>
        <label for="">Ingresa el valor de la hipotenusa
            <input type="number" name="hipotenusa">
        </label>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>