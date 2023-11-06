<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["envio"]) && !empty($_POST["envio"])){
        session_start();
        $item = $_POST["deseo"];
        $_SESSION["misesion"][] = $item;
        var_dump($_SESSION);
    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index App</title>
</head>

<body>
    <h1>Vamos a ver el contenido de mi sesion</h1>

        <h2>Formulario de deseo</h2>
        <form action="" method="post">

            Nuevo deseo:
            <input type="text" name="deseo">
            <input type="submit" name="envio" value="Enviar deseo">

        </form>
</body>

</html>