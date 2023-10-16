<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 1</title>
</head>

<body>
    <?php
    echo "<h3>Ejercicio 1.</h3>";
    $x = 144;
    $y = 999;
    $suma = $x + $y;
    $resta = $x - $y;
    $division = $x / $y;
    $multiplicacion = $x * $y;

    echo $suma;
    echo "<br> $resta";
    echo "<br> $division";
    echo "<br> $multiplicacion";

    echo "<h3>Ejercicio 2.</h3>";
    $nombre = "Bruno";
    $direccion = "c/dwadaw";
    $mail = "dwada@wdadaw.com";

    echo "<table border=1>
            <tr><td>$nombre</td></tr>
            <tr><td>$direccion</td></tr>
            <tr><td>$mail</td></tr>
        </table>";

    echo "<h3>Ejercicio 3.</h3>";

    $euros = 100;
    echo $pesetas = 166.386 * $euros;

    echo "<h3>Ejercicio 4.</h3>";

    const NUMERO = 8;

    for ($i = 1; $i <= 10; $i++) {
        echo "<br>$i x " . NUMERO . " = " . $i * NUMERO;
    }

    echo "<h3>Ejercicio 5.</h3>";
    echo "Numeros divisibles por 3";
    $divisor = 3;
    for ($i = 1; $i <= 10; $i++) {
        if ($i % $divisor == 0) {
            echo "<br>$i";
        }
    }


    echo "<h3>Ejercicio 6.</h3>";
    $num1 = 0;
    $num2 = 1;

    echo "<br>$num1<br>$num2";

    for ($i = 0; $i < 10; $i++) {
        $vartemporal = $num1;
        $num1 = $num2;
        $num2 = $vartemporal + $num1;
        echo "<br>$num2";
    }

    echo "<h3>Ejercicio 7.</h3>";

    const VARNUMERO = 169;
    $contador = 0;
    for ($i = 1; $i <= VARNUMERO; $i++) {
        if (VARNUMERO % $i == 0) {
            echo VARNUMERO . " es divisible por $i<br>";
            $contador++;
        }
    }
    if ($contador == 2) {
        echo "<h3>El nunero " . VARNUMERO . " es primo.</h3>";
    } else {
        echo "<h3>El nunero " . VARNUMERO . " no es primo.</h3>";
    }

    echo "<h3>Ejercicio 8.</h3>";

    $baloncesto = array("Pau Gasol", "Ricky Rubio", "Michael Jordan", "Lebron", "Kobe");

    foreach ($baloncesto as $elemento) {
        echo "<br>Nombre: " . $elemento;
    }
    echo "<br>";
    for ($i = 0; $i < count($baloncesto); $i++) {
        echo "<br>Jugador $i: " . $baloncesto[$i];
    }
    echo "<br>";
    print_r($baloncesto);

    echo "<h3>Ejercicio 9.</h3>";

    $equipo = array();

    array_push($equipo, "Pau Gasol");
    array_push($equipo, "Ricky Rubio");
    array_push($equipo, "Michael Jordan");
    array_push($equipo, "Lebron");
    array_push($equipo, "Kobe");
    print_r($equipo);

    echo "<h3>Ejercicio 10.</h3>";

    $array = [
        "base" => "Paul Gasol",
        "escolta" => "Ricky Rubio",
        "alero" => "Michael Jordan",
        "alapivot" => "Kobe",
        "pivot" => "Lebron"
    ];

    foreach ($array as $claves => $valores) {
        echo "<br>La posicion de $valores es $claves";
    }

    echo "<h3>Ejercicio 11.</h3>";

    $paises = [
        "España" => array("Moneda" => "Euros", "numHab" => 57),
        "Francia" => array("Moneda" => "Franco", "numHab" => 67),
        "Reino Unido" => array("Moneda" => "Libra", "numHab" => 47),
        "Rusia" => array("Moneda" => "Rublo", "numHab" => 147)
    ];

    foreach ($paises as $claves => $valores) {
        echo "<br>Pais " . $claves;
        echo " con moneda " . $valores["Moneda"];
        echo " con numHab " . $valores["numHab"];
    }

    echo "<h3>Ejercicio 12.</h3>";

    /*function ecuacionsegundogrado($a,$b,$c){
            $ecuacion1 = (-$b)+(sqrt($b*$b-4*$a*$c))/(2*$a);
            $ecuacion2 = (-$b)-(sqrt($b*$b-4*$a*$c))/(2*$a);

            if($ecuacion1 < 0 || $ecuacion2 < 0){
                echo "No hay soluciones reales";
            }
            else{
                $array = [];
            }
        }
        echo "<h3>Ejercicio 13.</h3>";
        */



    echo "<h3>Ejercicio 14.</h3>";

    function palindromo($palabra)
    {
        $palabra = strtolower($palabra);

        if ($palabra == strrev($palabra)) {
            return "Es Palindromo";
        } else {
            return "No es Palindromo";
        }
    }

    $palabra = "Ana";
    echo palindromo($palabra);

    include_once "matematicas.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["secu"]) && !empty($_POST["secu"])) {
            $a = $_POST["coef1"];
            $b = $_POST["coef2"];
            $c = $_POST["coef3"];
            $soluciones = array();

            $soluciones = calcularSolucion($a, $b, $c);
            if (isset($soluciones) && !empty($soluciones)) {
                echo "<p>Soluciones son : </p>" . $soluciones[0] . " y " . $soluciones[1];
            } else {
                echo "No hay solucion";
            }
        } else {
            echo "<br>no has pulsado el boton de submit";
        }
    }
    ?>

    <h1>Resolucion Ecuaciones 2ºGrado</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="number" name="coef1" id="coef1">x<sup>2 +-
            <input type="number" name="coef2" id="coef2">x +-
            <input type="number" name="coef3" id="coef3">
            <br><br>
            <input type="submit" name="secu" value="Enviar">
    </form>

</body>

</html>