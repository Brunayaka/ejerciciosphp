<?php

class App
{
    public function __construct()
    {
        //echo "contruyendo App<br>";
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'index';
        }
        $this->$method();
    }
    public function index()
    {
        //bienvenida a la aplicacion
        //echo "Aqui pondriamos la bienvenida<br>";
        include "vistas/index.php";
    }

    public function login()
    {
        //mostrar pantalla de login
        //echo "Aqui pondiamos el login<br>";
    }
    public function fibonacci()
    {
        $num1 = 0;
        $num2 = 1;
    
        echo "<br>$num1<br>$num2";
    
        for ($i = 0; $i < 29; $i++) {
            $vartemporal = $num1;
            $num1 = $num2;
            $num2 = $vartemporal + $num1;
            echo "<br>$num2";
        }
    }
    public function potencias2()
    {
        $num = 2;
        $res = 0;
        for ($i=0; $i <= 24; $i++) {
            $res = $num**$i;
            echo "<br>$res";
        }  
    }
    public function factoriales()
    {

        for ($i=1; $i < 10; $i++) { 
            $factorial = 1;
            for ($j=1; $j <= $i; $j++) { 
                $factorial *= $j;
            }
            echo "Factorial de " . $i . " = $factorial<br>";
        }
    }
}
