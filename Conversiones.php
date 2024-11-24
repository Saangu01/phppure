<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversiones</title>
</head>

    <script>
        function menu(){
            window.location.replace("Index.php");
        }

        function Apesos(){
            window.location.replace("Pesos Conversion.php");
        }

        function Amillas(){
            window.location.replace("Millas Conversion.php");
        }

        function Agrados(){
            window.location.replace("Grados Conversion.php");
        }

        function Apulgadas(){
            window.location.replace("Pulgadas Conversion.php");
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
            padding: 10px;
            color: #ffffff;
            border-radius: 5px;
        }

        .fondo{
            background-color: rgba(207, 214, 213, .3);
            border-radius: 5px;
        }
    </style>

        <h1>C o n v e r s i o n e s</h1>

        <input type="button" value="Volver" name="volver" onclick="menu()"><br>

    <form action="Conversiones.php" method="post">
        <label for="">Pesos Mexicanos (MXN) a Pesos Argentinos (ARG)</label>
        <input type="button" value="Ir" name="pesos" onclick="Apesos()">
        <br>
        <label for="">Millas (M) a Kilometros (KM)</label>
        <input type="button" value="Ir" name="millas" onclick="Amillas()">
        <br>
        <label for="">Grados Kelvin (°K) a Grados Celcius (°C)</label>
        <input type="button" value="Ir" name="grados" onclick="Agrados()">
        <br>
        <label for="">Pulgadas (P) a Centimetros (CM) </label>
        <input type="button" value="Ir" name="pulgadas" onclick="Apulgadas()">
        <br>
    </form>
</body>
</html>