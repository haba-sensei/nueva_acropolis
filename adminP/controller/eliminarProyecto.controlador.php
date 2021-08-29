<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php'; 
  

$proyect_id = $_GET['proyect'];

consultasSQL::DeleteSQL('proyectos', "id='".$proyect_id."'");

echo "<script> window.location.replace('../list_proyecto.php');</script>";



 