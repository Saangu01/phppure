<?php
    
    //Área de un Triangulo

        if (isset($_POST['base_triangulo']) && ($_POST['altura_triangulo'])){

            intval($base_triangulo0 = $_POST['base_triangulo']);
            intval($altura_triangulo0 = $_POST['altura_triangulo']);
            function respuesta1($base_triangulo0, $altura_triangulo0){
                $resultado1 = ($base_triangulo0 * $altura_triangulo0) / 2;
                print "El area del triangulo es: $resultado1";
            }
            respuesta1($base_triangulo0, $altura_triangulo0);
        }

    //Área de un Trapecio

        if (isset($_POST['base_mayor']) && ($_POST['base_menor']) && ($_POST['altura_trapecio'])){

            intval($b1 = $_POST['base_mayor']);
            intval($b2 = $_POST['base_menor']);
            intval($altura_trapecio0['altura_trapecio']);
            function respuesta5($b1, $b2, $altura_trapecio0){
                $resultado5 = ($b1 + $b2) / 2*$altura_trapecio0;
                print "El area del trapecio es: $resultado5";
            }
            respuesta5($b1, $b2, $altura_trapecio0);
        }

    //Área de un Cuadrado

        if (isset($_POST['lado_cuadrado'])){

            intval($lado_cuadrado0 = $_POST['lado_cuadrado']);
            function respuesta2($lado_cuadrado0){
                $resultado2 = ($lado_cuadrado0 * 4);
                print "El area del cuadrado es: $resultado2";
            }
            respuesta2($lado_cuadrado0);
        }

    //Área de un Circulo

        if (isset($_POST['radio_circulo'])){

            intval($radio_circulo0 = $_POST['radio_circulo']);
            function respuesta4($radio_circulo0){
                $resultado4 = (M_PI * $radio_circulo0) ** 2;
                print "El area del circulo es: $resultado4";
            }
            respuesta4($radio_circulo0);
        }

        

?>