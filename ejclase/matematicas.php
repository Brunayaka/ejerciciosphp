<?php
function calcularSolucion($a, $b, $c)
{
    if (($b ** 2 - 4 * $a * $c) < 0) {
        return false;
    }
    $res1 = (-$b + sqrt($b ** 2 - 4 * $a * $c)) / 2 * $a;
    $res2 = (-$b - sqrt($b ** 2 - 4 * $a * $c)) / 2 * $a;
    $arrres = array($res1, $res2);

    return $arrres;
}
