<?php
    function esPalindromo($cadena){
        $cadena = str_replace(' ' , '',strtolower($cadena));
        $cadreves = strrev($cadena);
        if(strcmp($cadena,$cadreves) == 0){
            echo "Es palindromo";
        }else{
            echo "No es palindromo";
        }
        return;
    }


    $cadena = "Ana lava Lana";
    esPalindromo($cadena);