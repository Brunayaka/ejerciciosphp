<?php

echo "<h2>Funciones php</h2>";

function sumar($oper1,$oper2) {
    $suma = $oper1 + $oper2;

    static $contador = 0;
    echo "<br>Contador vale " . $contador++;

    global $varglobal;
    $varglobal = 13456;

    return $suma;
}

function aumentarsueldo(&$operando){
    $operando *= 3;
}

echo "<p>Funcion suma</p>";
$dato = sumar(4,6);
//echo "<p>Primer parametro suma</p>" . $oper1;
$dato = sumar(3,4);

echo "<p>Resultado suma</p>" . $dato;

$varglobal = 666;
echo "<p>Varglobal con valor antes de llamar a sumar </p>" . $varglobal;

$dato = sumar(2,7);

echo "<p>Varglobal con valor despues de llamar a sumar </p>" . $varglobal;

$sueldo = 1000;

aumentarsueldo($sueldo);

echo "<p>ahora mi sueldo es </p>" . $sueldo;