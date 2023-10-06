<?php
echo "<h4>Resultado de la suma</h4>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
    if (isset($_POST["nsuma"]) && !empty($_POST["nsuma"])) {
        $suma = $_POST["nsuma"];
        $resultado = 0;
        foreach ($suma as $numero) {
            $resultado += $numero;
        }
        echo "El resultado de la suma es: " . $resultado;
    } else {
        echo "<br>No has seleccionado ningun numero";
    }
    echo "<br>";
    if (isset($_POST["rfigura"]) && !empty($_POST["rfigura"])) {
        if($figura = $_POST["rfigura"] === "triangulo"){
            echo "El area del triangulo es: (base * altura) / 2";
        }
        elseif ($figura = $_POST["rfigura"] === "cuadrado") {
            echo "El are del cuadrado es: Lado * Lado";
        }
        else{
            echo "El area del circulo es: PI * radio²";
        }
    }

}