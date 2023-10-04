<?php
if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
    if (isset($_POST["iusuario"]) && !empty($_POST["iusuario"])) {
        $usuario = $_POST["iusuario"];
    }
    if (isset($_POST["ipassword"]) && !empty($_POST["ipassword"])) {
        $password = $_POST["ipassword"];
    }

    if (!empty($usuario) && !empty($password)) {
        if($usuario === "Admin" && $password === "456"){
            echo "<br>Bienvenido administrador";
        }else{
            echo "<br>Bienvenido usuario";
        }
    }else{
        echo "<h4>No has especificado usuario y/o password.</h4>";
    }
}else{
    echo "<h2>No has llegado aqui haciendo login</h2>";
}