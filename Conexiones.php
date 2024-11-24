<?php
    $areas = "";
    $volumen = "";
    $conversiones = "";
    $geometria = "";
    $pesos ="";

    if(isset($_GET['areas']))$areas = $_GET['areas'];
    if(isset($_GET['volumen']))$volumen = $_GET['volumen'];
    if(isset($_GET['conversiones']))$conversiones = $_GET['conversiones'];
    if(isset($_GET['geometria']))$geometria = $_GET['geometria'];
    if(isset($_POST['pesos']))$pesos = $_POST['pesos'];

    if($areas){
        include ('Areas.php');
    }

    if($volumen){
        include ('Volumen.php');
    }

    if($conversiones){
        include ('Conversiones.php');
    }

    if($geometria){
        include ('Geometria.php');
    }

    if($pesos){
        include ('Pesos Conversion.php');
    }

?>