<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejemplo</title>
</head>
<body>
    
    <?php
        $var1 = "¡Hola,";
        $var2 = "soy un script de PHP!";
        echo $var1 . "<br>" . $var2 . "<br>";

        //Mostrar por pantalla con echo, print, print_r
        // var_dump

        print $var1 . "<br>" . $var2 . "<br>";

        print_r($var1 . "<br>" . $var2 . "<br>");

        var_dump($var1 . "<br>" . $var2 . "<br>");


        $numero = 7;
        $cad1 = "Una cadena. $numero";
        $cad2 = 'Otra cadena. $numero';
        echo $cad1 . "<br>" . $cad2;


    ?>
    
</body>
</html>
