<?php
echo "<h2>Resultado encuesta Lenguajes Programacion</h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    //chequeo del radio button
    if (isset($_POST["lprog"]) && !empty($_POST["lprog"])) {
        $lenguaje = $_POST["lprog"];
        echo "<h2>Tu lenguaje preferido es: $lenguaje</h2>";
    }


    //chequeo del checkBox
    //echo "<br>Num eleme : " . count($_POST["ntrans"]);
    if (isset($_POST["ntrans"]) && !empty($_POST["ntrans"])) {
        $transportes = $_POST["ntrans"];
        foreach ($transportes as $key) {
            echo "<br>Tu transporte preferido es: " . $key;
        }
    } else {
        echo "<br>No has seleccionado ningun transporte";
    }
    //chequeo seleccion 
    if (isset($_POST["sfutbol"]) && !empty($_POST["sfutbol"])) {
        $efutbol = $_POST["sfutbol"];
        echo "<h2>Tu equipo preferido es: $efutbol</h2>";
    }
    //lista multiple de menu
    if (isset($_POST["smenu"]) && !empty($_POST["smenu"])) {
        $menus = $_POST["smenu"];
        foreach ($menus as $plato) {
            echo "<br>Plato preferido : " . $plato;
        }
    }
}
