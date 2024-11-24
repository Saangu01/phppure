<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas</title>
</head>

    <script>
        function menu(){
            window.location.replace("index.php");
        }

        function triangulo(){
            window.location.replace("Triangulo.php");
        }

        function trapecio(){
            window.location.replace("Trapecio.php");
        }

        function cuadrado(){
            window.location.replace("Cuadrado.php");
        }

        function circulo(){
            window.location.replace("Circulo.php");
        }
    </script>

<body>
        
    <style>
        .imagen{
            height: 200px;
            width: 200px;
            padding: 3px;
        }

        .trapecio{
            height: 200px;
            width: 250px;
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
    <h1>A r e a s</h1>


    <input type="button" value="Volver" name="volver" onclick="menu()"><br>

    <div class="contenido">
        <h2 class="fondo">Triangulo</h2>
            <img class="imagen" src="IMG/Imagen1.png" alt="triangulo" onclick="triangulo()">
        <br>
        <h2 class="fondo">Trapecio</h2>
            <img class="trapecio" src="IMG/Imagen2.png" alt="trapecio" onclick="trapecio()">
        <br>
        <h2 class="fondo">Cuadrado</h2>
            <img class="imagen" src="IMG/Imagen3.png" alt="cuadrado" onclick="cuadrado()">
        <br>
        <h2 class="fondo">Circulo</h2>
            <img class="imagen" src="IMG/Imagen4.png" alt="circulo" onclick="circulo()">
        <br>
    </div>
    
</body>
</html>