<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index App</title>
</head>

<body>
    <h1>Vamos a ver el contenido de mi sesion</h1>

   <!-- <pre>
        <?php
        var_dump($_SESSION);
        ?>
    </pre>-->
    <h2>Informacion de la sesion</h2>
    <h3>Ultimo deseo</h3>
    <p>
        <?php
            if(isset($_SESSION['deseo'])){
                echo $_SESSION['deseo'];
            }else{
                echo "no hay ningun deseo todavia";
            }
        ?>
    </p>

    <h3>Lista de todos los deseos</h3>
    <ul>
    <?php
        foreach($_SESSION['deseos'] as $deseo) {
    ?>
    <li><?php echo "$deseo "?></li>
    <?php
    }
    ?>
    </ul>

    <ul>

    <?php
        foreach ($_SESSION['deseos'] as $i => $deseo) {
    ?>
    <li>
        <?php echo "$i: $deseo"?>
        <a href="?methor=eliminar&id<?php echo $i ?>">borrar</a>
    </li>
    <?php } ?>
    </ul>

    <a href="/app/index.php?method=borrarsesion">Borrar sesion</a>

        <h2>Formulario de deseo</h2>
        <form action="/app/index.php?method=guardarsesion" method="post">

            Nuevo deseo:
            <input type="text" name="deseo">
            <input type="submit">

        </form>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="index.php?method=index">Inicio tambien</a></li>

        <li><a href="index.php?method=fibonacci">Fibonnaci</a></li>
        <li><a href="index.php?method=potencias2">Potencias2</a></li>
        <li><a href="index.php?method=factoriales">factorial</a></li>
        <li><a href="index.php?method=versesion">Ver contenido de la sesion</a></li>
    </ul>
</body>

</html>