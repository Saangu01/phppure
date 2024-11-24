<?php

//Área de un Triangulo

    if (isset($_POST['base_triangulo']) && ($_POST['altura_triangulo'])){

        $base_triangulo0 = intval($_POST['base_triangulo']);
        $altura_triangulo0 = intval($_POST['altura_triangulo']);
        function respuesta1($base_triangulo0, $altura_triangulo0){
            $resultado1 = ($base_triangulo0 * $altura_triangulo0) / 2;
            print "El area del triangulo es: $resultado1";
        }
        respuesta1($base_triangulo0, $altura_triangulo0);
    }

//Área de un Trapecio

    if (isset($_POST['base_mayor']) >0 && ($_POST['base_menor']) >0 && ($_POST['altura_trapecio'])){

        $b1 = intval($_POST['base_mayor']);
        $b2 = intval($_POST['base_menor']);
        $altura_trapecio0 = intval($_POST['altura_trapecio']);
        function respuesta5($b1, $b2, $altura_trapecio0){
            $resultado5 = $altura_trapecio0 * ($b2 + $b1) / 2;
            print "El area del trapecio es: $resultado5";
        }
        respuesta5($b1, $b2, $altura_trapecio0);
    }

//Área de un Cuadrado

    if (isset($_POST['lado_cuadrado'])){

        $lado_cuadrado0 = intval($_POST['lado_cuadrado']);
        function respuesta2($lado_cuadrado0){
            $resultado2 = ($lado_cuadrado0 * 4);
            print "El area del cuadrado es: $resultado2";
        }
        respuesta2($lado_cuadrado0);
    }

//Área de un Circulo

    if (isset($_POST['radio_circulo'])){

        $radio_circulo0 = intval($_POST['radio_circulo']);
        function respuesta4($radio_circulo0){
            $resultado4 = (M_PI * $radio_circulo0 ** 2);
            print "El area del circulo es: $resultado4";
        }
        respuesta4($radio_circulo0);
    }

    //Volumenes de Figuras

//Volumen de un Cubo

    if (isset($_POST['lado_cubo'])){

        $lado_cubo0 = intval($_POST['lado_cubo']);
        function respuesta2($lado_cubo0){
            $resultado2 = ($lado_cubo0 ** 3);
            print "El volumen del cubo es: $resultado2";
        }
        respuesta2($lado_cubo0);
    }

//Volumen de una Esfera

    if (isset($_POST['radio_esfera'])){

        $radio_esfera0 = intval($_POST['radio_esfera']);
        function respuesta4($radio_esfera0){
            $resultado4 = (4 / 3) * M_PI * $radio_esfera0**3;
            print "El volumen de la esfera es: $resultado4";
        }
        respuesta4($radio_esfera0);
    }

//Volumen de un Cilindro

    if (isset($_POST['radio_cilindro']) && ($_POST['altura_cilindro'])){
        $radio_cilindro0 = intval($_POST['radio_cilindro']);
        $altura_cilindro0 = intval($_POST['altura_cilindro']);
        function respuesta6($radio_cilindro0, $altura_cilindro0){
            $resultado6 = (M_PI * $radio_cilindro0 ** 2) * $altura_cilindro0;
            print "El volumen del cilindro es: $resultado6";
        }
        respuesta6($radio_cilindro0, $altura_cilindro0);
    }

//Volumen de un Prisma Triangular

    if (isset($_POST['base_prisma']) && ($_POST['altura_prisma'])){

    $b_prisma = intval($_POST['base_prisma']);
    $altura_prisma0 = intval($_POST['altura_prisma']);
    function respuesta5($b_prisma, $altura_prisma0){
        $resultado5 = (sqrt(3)/4 * $b_prisma ** 2) * $altura_prisma0;
        print "El volumen del prisma es: $resultado5";
    }
    respuesta5($b_prisma, $altura_prisma0);
}

    //Conversiones

//Pesos mexicanos a pesos argentinos

    if (isset($_POST['pesos_mexicanos'])){
        $pesos_mexicanos0 = intval($_POST['pesos_mexicanos']);
        function conversion1($pesos_mexicanos0){
            $peso_arg = 50.01;
            $res_conversion1 = ($pesos_mexicanos0 * $peso_arg);
            print "La conversion de pesos mexicanos a pesos argentinos es: $res_conversion1 <br>";
        }
        conversion1($pesos_mexicanos0);
    }

//Millas a Kilometros

    if (isset($_POST['millas'])){
        $millas0 = intval($_POST['millas']);
        function conversion2($millas0){
            $cant_millas = 1.60934;
            $kilometros = $cant_millas * $millas0;
            print "La conversión de millas a kilometros es: $kilometros <br>";
        }
        conversion2($millas0);
    }

//Grados kelvin a celcius

    if (isset($_POST['grados_kelvin'])){
        $grados_kelvin0 = intval($_POST['grados_kelvin']);
        function conversion3($grados_kelvin0){
            $grados_celcius = $grados_kelvin0 - 273.15;
            print "La conversión de grados kelvin a grados celcius es: $grados_celcius <br>";
        }
        conversion3($grados_kelvin0);
    }

//Pulgadas

    if(isset($_POST['pulgadas'])){
        $pulgadas0 = intval($_POST['pulgadas']);
        function conversion4($pulgadas0){
            $cant_pulgadas = 2.54;
            $centimetros = $cant_pulgadas + $pulgadas0;
            print "La conversión de pulgadas a centimentros es: $centimetros <br>";
        }
        conversion4($pulgadas0);
    }

//Geometria

    if(isset($_POST['b1']) && ($_POST['b2']) && ($_POST['hipotenusa'])){
        $b10 = intval($_POST['b1']);
        $b20 = intval($_POST['b2']);
        $hipotenusa0 = intval($_POST['hipotenusa']);
    }
    
?>