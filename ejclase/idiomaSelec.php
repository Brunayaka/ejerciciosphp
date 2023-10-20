<?php
if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
    if(isset($_POST["ridioma"]) && !empty($_POST["ridioma"])){
        if(!isset($_COOKIE["datos"])){
            // creo la cookie
            setcookie("datos",$_POST["ridioma"],time()+7200*24,"/");
            $idioma = $_POST["ridioma"];
            mostrarIdioma($idioma);
        }else{
            $idioma = $_COOKIE["datos"];
            mostrarIdioma($idioma);
        }
    }
}

function mostrarIdioma($idioma){
    switch($idioma){
        case "frances":
            echo "dawdawda";
            break;
        case "español":
            echo "bienvenido";
            break;
        case "aleman":
            echo "wilkomen";
            break;
    }

}