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
        $array = array();
        for ($i=0; $i <= 11; $i++) {
            $array[] = 2**$i;
        }
        $this->mostrararray($array,"potencias2");
    }

    function mostrararray($array,$nombrefunc){
        include("vistas/matematicas.php");
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

    public function versesion(){
        session_start();
        include('vistas/sesion.php');

    }

    function guardarsesion(){
        session_start();
        $item = $_POST["deseo"];
        $_SESSION["deseo"][] = $item;
        



        // $_SESSION['deseo']=$_POST['deseo'];
        // if(isset($_SESSION['deseos'])){
        //     $deseos = $_SESSION['deseos'];
        // }
        // else{
        //     $deseos = array();
        // }
        // $deseos[] = $_POST['deseo']; // añadir al final del array
        // $_SESSION['deseos'] = $deseos;
        header('Location: /app/index.php?method=versesion');
        // echo "Ya esta guardado";
    }
    function borrarsesion(){
        session_start();
        $datos = json_encode($_SESSION['deseo']);
        setcookie(session_name(),$datos,time()-720000); // caduco la cookie asociada a la sesion
        unset($_SESSION); // elimina los datos asociados a la sesion
        session_destroy(); // elimina toda la informacion de sesion del servidor
        header('Location: /app/index.php?method=versesion');

    }// borrarSesion

    function eliminar(){
        session_start();
        $id = $_GET["id"];
        print_r($_SESSION);
        unset($_SESSION['deseo'][$id]); //elimino elemento
        header('Location: /app/index.php?method=versesion');
    }// eliminar un elemento
}
