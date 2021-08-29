<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php'; 
 
    $usuario = $_POST['usuario-login'];
    $clave = md5($_POST['clave-login']);
 

if (!$usuario == "" && !$clave == "") {

     
        $verAfil = ejecutarSQL::consultar("SELECT `user`.*, `user`.`user`, `user`.`pass`
        FROM `user`
        WHERE `user`.`user` = '$usuario' AND `user`.`pass` = '$clave';");
      
    
    
    $AfilC = mysqli_num_rows($verAfil);

        if ($AfilC > 0) { 
        $_SESSION["iniciarSesion"] = "ok";
        
          echo '<script>window.location = "dashboard"; </script>';
            
       
           
        } else {
            echo '<script> alert("Usuario no registrado"); </script>';
            // echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto </div> </div>';
        }
    
    
} else {
    echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Campos Vacios</div> </div>';
}