<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
  
    if($_SESSION["iniciarSesion"] != "ok"){
        header("Location: ../index.php"); 
    }


?>