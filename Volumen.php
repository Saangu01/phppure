<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volumen</title>
</head>

    <script>
        function menu(){
            window.location.replace("Index.php");
        }

        function cubo(){
            window.location.replace("Cubo.php");
        }

        function esfera(){
            window.location.replace("Esfera.php");
        }

        function cilindro(){
            window.location.replace("Cilindro.php");
        }

        function prisma(){
            window.location.replace("Prisma.php");
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
    <h1>V o l u m e n</h1>

    <input type="button" value="Volver" name="volver" onclick="menu()">

    <div class="contenido">
        <h2 class="fondo">Cubo</h2>
            <img class="imagen" src="IMG/cubo.png" alt="cubo" onclick="cubo()">
        <br>
        <h2 class="fondo">Esfera</h2>
            <img class="imagen" src="IMG/esfera.png" alt="esfera" onclick="esfera()">
        <br>
        <h2 class="fondo">Cilindro</h2>
            <img class="imagen" src="IMG/cilindro.png" alt="cilindro" onclick="cilindro()">
        <br>
        <h2 class="fondo">Prisma Triangular</h2>
            <img class="imagen" src="IMG/prisma.png" alt="prisma" onclick="prisma()">
        <br>
    </div>
</body>
</html>