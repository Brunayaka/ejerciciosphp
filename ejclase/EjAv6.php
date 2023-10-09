<?php
    echo "<p>Directorio raiz : </p>" . $_SERVER['DOCUMENT_ROOT'];
    echo "<p>Protocolo : </p>" . $_SERVER['SERVER_PROTOCOL'];
    echo "<p>Nombre del servidor : </p>" . $_SERVER['SERVER_NAME'];
    echo "<p>Tipo peticion HTTP : </p>" . $_SERVER['REQUEST_METHOD'];
    echo "<p>Direccion IP del cliente : </p>" . $_SERVER['REMOTE_ADDR'];
