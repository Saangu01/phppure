<?php
    print "Uso de clases en php";
    class Helados{
        public $sabor;
        public $precio;
        public $ubicacion;
        //Método constructor
        public function __construct($sabor, $precio, $ubicacion)
        {   
                $this -> sabor = $sabor;
                $this -> precio = $precio;
                $this -> ubicacion = $ubicacion;
        }
    }

    //Instanciar una clase

    $helado1 = new Helados('Chocolate','30','Chirlos');

    class Perritos{
        public $raza;
        public $edad;
        public $color;
        //Método Constructor
        public function __construct($raza, $edad, $color)
        {
                $this -> raza = $raza;
                $this -> edad = $edad;
                $this -> color = $color;
        }
    }

    //Instanciar una clase

    $perritos1 = new Perritos('Chihuhua','3','Marrón');

    class Hamburguesas{
        public $sabor_hamburguesa;
        public $precio_hamburguesa;
        public $ubicacion_hamburguesa;
        //Método Constructor
        public function __construct($sabor_hamburguesa, $precio_hamburguesa, $ubicacion_hamburguesa)
        {
                $this -> sabor_hamburguesa = $sabor_hamburguesa;
                $this -> precio_hamburguesa = $precio_hamburguesa;
                $this -> ubicacion_hamburguesa = $ubicacion_hamburguesa;
        }
    }

    //Instanciar una clase

    $hamburguesas1 = new Hamburguesas('10','120','Centro');

    class Computadoras{
        public $procesador;
        public $precio_computadoras;
        public $grafica;
        public $almacenamiento;
        public $marca;
        //Método Constructor
        public function __construct($procesador,$grafica, $precio_computadoras, $almacenamiento, $marca)
        {
                $this -> procesador = $procesador;
                $this -> grafica = $grafica;
                $this -> precio_computadoras = $precio_computadoras;
                $this -> almacenamiento = $almacenamiento;
                $this -> marca = $marca;                
        }
    }

    //Instanciar una clase

    $computadoras1 = new Computadoras('i5 11va gen','2080Ti','25000','1TB','ASUS');

?>