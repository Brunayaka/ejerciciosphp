<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mostrando calculos de funcion <?=$nombrefunc ?></h1>
    <?php
        foreach ($array as $elem) {
            echo "$elem ";
        }
    ?>
</body>
</html>