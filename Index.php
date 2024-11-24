<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>

    <style>
        body{
            background-color: #2b2b2b;
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

        .menu{
            color: #f3f3f3;
            background-color: #406F6C;
            border-radius: 12px;
            padding: 2px;
        }


    </style>
    <div class="menu">
        <h1>M E N Ú</h1>
        <form action="Conexiones.php" method="GET">
            <input type="submit" value="Áreas" name="areas">
            <br>
            <br>
            <input type="submit" value="Vólumen" name="volumen">
            <br>
            <br>
            <input type="submit" value="Conversiones" name="conversiones">
            <br>
            <br>
            <input type="submit" value="Geometria" name="geometria">
            <br>
            <br>
        </form>   
    </div>
    
</body>
</html>