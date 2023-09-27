<?php

    //Mostrar por pantalla : echo, print, print_r, var_dump

    $num = 16;
    $num2 = "16";
    $cadena = "Hola, \"Pedro\"";
    $decimal = 5.4;
    $resultado = (integer)($num2 / $decimal);
    echo $cadena;
    echo gettype($decimal);

    // Operadores aritmeticos y logicos
    // Logicos: && , ||
    // Aritmeticos: +,-,*,/,%,**
    // Comparación: ==, != , <> , ! , <= , >=

    // if , else , elseif , switch case.
    // == igual contenido
    // === igual contenido y tipo
    // <=> spaceship 2<=>2 -> 0
    // 2 <=> 3 -> -1
    // 3 <=> 2 -> 1

    if($num === $num2){
        echo "<br>" . "son iguales";
    }
    else{
        echo "<br>" . "son distintos";
    }
    echo "<br>" . $resultado;

    // Constante
    define("PI",3.14);
    echo "<br>PI VALE: " . PI;

    const NUMAUREO = 1.15;
    echo "<br>NUMAUREO: " . NUMAUREO;

    echo "<br><h3>BUCLE FOR</h3>";

    for($i=0;$i<10;$i++){
        echo "i vale" . $i ."<br>";
    }



