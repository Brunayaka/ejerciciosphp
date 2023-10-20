<?php
    // estableces cookie

    $animales = [
        "mamifero" => "Perro",
        "oviparo" => "pato",
        "reptil" => "serpiente"
    ];
    
    $datosencoded = json_encode($animales);

    /*
    {
        mamifero : perro,
        oviparo : pato,
        reptil : serpiente
    }
    */

    if(!isset($_COOKIE["datos"])){
        setcookie("datos",$datosencoded,time()+7200*24,"/");
    }
    else{
        $datadecoded = $_COOKIE["datos"];
        //$data = json_decode($datadecoded);
        $data = json_decode($datadecoded,true);
        echo "<br>El valor de cookie es " . $data["reptil"];
        //$data = json_decode($datadecoded);
        //echo "<br>El valor de cookie es " . $data->{"reptil"};
    }



    //echo "<br>El valor de la cookie es " . $_COOKIE["datos"];

    //sleep(15);
    //setcookie("datos","23",time()-92000*24,"/");
    //echo "Borrando cookies...";

    // Crear una web para que selecciones tu idioma preferido
    // y en funcion del idioma te saque un mensaje de bienvenida

    // 1 web con la seleccion del idioma
    // 1 web con el mensaje de bienvenida en el idioma adecuado
