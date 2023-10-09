<?php
   if($_POST['iusuario'] === "Admin" && $_POST['ipassword'] === "456"){
    echo "<br>Bienvenido administrador";
   }
   else{
    echo "<br>Bienvenido: " .$_POST['iusuario'];
   }

    // si es administrador -> bienvenido admin
    // si no es admin -> Bienvenido <nombreusuarioinstroducido>
