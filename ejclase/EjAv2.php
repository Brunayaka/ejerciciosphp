<?php
    if(isset($_POST['ienviar']) && !empty($_POST['ienviar'])){
        try{
            if($_POST['idivisor'] == 0){
                throw new Exception("El divisor es cero");
            }
        }catch(Exception $e){
            echo "Se ha producido una excepcion <br>". $e->getMessage();
        }finally{
            echo "<br>Esto siempre se ejecuta";
        }

    }