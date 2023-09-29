<?php
    echo "<h1>VARIABLES</h1>";
    $saludo = "hola"; // case sensitice : variables, pero funciones no.
    echo "<br>Un saludo: $saludo";

    echo "<h3>Concatenar variables</h3>";
    $despedida = " y adios";
    $saludo .= $despedida; //$despedida = $despedida . $saludo
    echo " $saludo";
    $numero = 20;
    $numero += 3; // $numero = $numero + 3
    // $numero++ y ++$numero.
    echo "<br>$saludo con numero ". ++$numero;

    echo "<h3>Valo y referencia</h3>";
    $var = 100;
    $var2 = &$var; //var2 es una referencia a var1
    $var3 = $var; // var3 es una copia
    echo "<br>var es : ". $var;
    echo "<br>var2 es : ". $var2;
    echo "<br>var3 es : ". $var3;

    $var = 333;

    echo "<br>var es : ". $var;
    echo "<br>var2 es : ". $var2;
    echo "<br>var3 es : ". $var3;

    echo "<h3>Variables de variables</h3>";
    $vehiculo = "coche";
    $$vehiculo = "audi"; // $vehiculo=coche ; $coche = audi

    echo "<br>El $vehiculo es de marca $coche";
    echo "<br>El $vehiculo es de marca ". ${$vehiculo};

