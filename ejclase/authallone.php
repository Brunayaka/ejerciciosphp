<?php
$err = null;
if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
    if (isset($_POST["iusuario"]) && !empty($_POST["iusuario"])) {
        $usuario = $_POST["iusuario"];
    }
    if (isset($_POST["ipassword"]) && !empty($_POST["ipassword"])) {
        $password = $_POST["ipassword"];
    }
    if(!empty($usuario) && !empty($password)){
        /*if($usuario === "Admin" && $password === "456"){
            //Redirigir a pagina
            header("Location: autoriza2.php");
        }*/
        header("HTTP/1.1 307 Temporary Redirect");
        header("Location: autoriza2.php");
    }
    $err = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoriza todo uno</title>
</head>

<body>
    <h2>Página de Login</h2>
    <?php
    if($err){
        $msg = "<p style=\"color: red\">Error al introducir credenciales</p>";
        echo $msg;
    }
    ?>
    <form name="flogin" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <div>
            <label for="usuario">Introduce usuario:</label>
            <input type="text" name="iusuario" id="usuario">
            <br> <br> <br>
            <label for="password">Introduce password:</label>
            <input type="text" name="ipassword" id="password">
        </div>
        <br> <br>
        <input type="submit" name="ienviar" value="Enviar">

    </form>
</body>

</html>