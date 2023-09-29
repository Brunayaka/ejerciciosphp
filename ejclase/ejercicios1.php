
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

    for ($i=1; $i <= 10 ; $i++) { 
        echo "<br>$i x ".NUMERO." = ". $i*NUMERO;
    }
    
    echo "<h3>Ejercicio 5.</h3>";
    echo "Numeros divisibles por 3";
    $divisor = 3;
    for ($i=1; $i <= 10; $i++) { 
        if ($i%$divisor == 0) {
            echo "<br>$i";
        }
    }


    echo "<h3>Ejercicio 6.</h3>";
    $num1 = 0;
    $num2 = 1;

    echo "<br>$num1<br>$num2";

    for ($i=0; $i < 10; $i++) { 
        $vartemporal = $num1;
        $num1 = $num2;
        $num2 = $vartemporal + $num1;
        echo "<br>$num2";
    }

    echo "<h3>Ejercicio 7.</h3>";

    const VARNUMERO = 169;
    for ($i=2; $i <= VARNUMERO; $i++) { 
        if (VARNUMERO%$i==0) {
            echo VARNUMERO . " es divisible por $i<br>";
        }
    }
    echo "<h3>El nunero es primo.</h3>"

?>

