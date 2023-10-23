<?php
    echo "<h1>Utilizar ficheros</h1>";
    echo "<h2>Lectura ficheros</h2>";
    $nombre = "mifich.txt";
    $fp = fopen($nombre,"r");
    while(!feof($fp)){
        /*
        // linea a linea
        $linea = fgets($fp);
        echo $linea . "<br>";*/
        $caracter = fgetc($fp);
        if($caracter === "\n")
            $caracter = "<br>";
            echo $caracter;

    }

    fclose($fp);


    echo "<h2>Escritura ficheros</h2>";
    $fp = fopen($nombre,"a");
    if(!$fp){
        die("No se puede abrir el fichero");
    }else{
        fwrite($fp,"Soy otra cadena" . PHP_EOL);
        fwrite($fp,"Cadena escrita en " . time() . PHP_EOL);
    }

    fclose($fp);

