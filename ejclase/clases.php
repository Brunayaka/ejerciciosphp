<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <h1>Informacion persona y profesores</h1>
    <?php
        include_once "Persona.php";
        include_once "Profesor.php";

        $p = new Persona("Fernando", 25);
        echo "<br>Nombre persona: " .$p->getNombre();
        echo "<br>";
        echo $p;

        $profe = new Profesor("Juan", 34, 789);
        echo "<br>";
        echo $profe;
        echo "<br>";
        echo "Contador personas: " . Persona::$contadorPersona;
    ?>
</body>
</html>