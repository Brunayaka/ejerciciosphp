<?php

echo "<h2>Información del fichero subido</h2>";
echo "<p>Nombre del fichero</p>" . $_FILES['myfile']['name'];
echo "<p>Tipo/extension fichero</p>" . $_FILES['myfile']['type'];
echo "<p>Tamaño del fichero</p>" . $_FILES['myfile']['size'];
echo "<p>Nombre fichero TEMPORAL</p>" . $_FILES['myfile']['tmp_name'];

// Subo fichero al servidor
$resultado = move_uploaded_file($_FILES['myfile']['tmp_name'], "../uploads/" .$_FILES['myfile']['name']);
if($resultado){
    echo "<h4>Fichero subido correctamente</h4>";
}else{
    echo "<h4>Error al subir el fichero</h4>";
}
