<?php
    echo "<h1>Array Asociativos</h1>";
    // Array
    // $miarray = [5,6]; $miarray = array ("perro" , "gato");

    $capitales = [
        "España" => "Madrir",
        "UK" => "Londres",
        "Francia" => "Paris"
    ];

    //Mostrar el Array

    foreach($capitales as $claves => $valores){
        echo "<br>La capital de $claves es $valores";
    }
    
    echo "<h3>Arrays multidimensionales (arrays de arrays)</h3>";

    $cestacompra = array(
        "frutas" => array("pera", "manzana"),
        "verduras" => array("calabacin")

    );

    print_r($cestacompra);
    echo "<br>";
    foreach($cestacompra as $claves => $valores){
        echo "<br>$claves";
        foreach($valores as $kvalor => $vvalor){
            echo "<br>La clave es $kvalor y el valor es $vvalor";
        }
    }
    echo "<br>Las frutas son: ";
    foreach($cestacompra["frutas"] as $claves => $valores){
        echo " $valores";  
    }
    // manzana
    $unafruta = $cestacompra["frutas"][1];

    echo "<br> soy la fruta: $unafruta";

    $cestacompra["frutas"][1] = "apple";

    echo "<br> soy la fruta: " . $cestacompra["frutas"][1];


    echo "<h3>Funciones de ordenación</h3>";
    // Insertar el ultimo elemento
    array_push($cestacompra,"Kiwi");
    var_dump($cestacompra);
    echo "<br>";
    $cestacompra["verduras"][] = "acelga";
    var_dump($cestacompra);
    echo "<br>";

    $unkiwi = array_pop($cestacompra); // Extrae el ultimo elemento del array
    print_r($cestacompra);
    echo "<br>";
    echo "soy un $unkiwi";
    
    echo "<h2>Shift y Unshift</h2>";
    $elemento = array_shift($cestacompra); // Extrae el primero del array
    print_r($cestacompra);
    echo "<br>";
    print_r($elemento);


    echo "<br>";
    array_unshift($cestacompra,"colacao"); // Insertar al principio del array
    print_r($cestacompra);

    echo "<h2>Ordenación</h2>";
    //sort($capitales); // Ordena los valores. (Ojo las claves desaparecen)
    asort($capitales); // Ordena los valores. Mantiene las claves.
    echo "<br>";
    print_r($capitales);

    echo "<h2>Ordenación Inversa</h2>";
    //rsort($capitales); // Ordena los valores de manera descendente(Ojo las claves desaparecen)
    arsort($capitales); // Ordena los valores. Mantiene las claves.

    print_r($capitales);

    echo "<h2>Ordenación Segun clave</h2>";
    ksort($capitales); // Ordena los por clave
    print_r($capitales);






