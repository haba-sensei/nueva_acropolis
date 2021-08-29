<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php'; 
  

$depa_id = $_GET['depa'];

consultasSQL::DeleteSQL('departamentos', "id='".$depa_id."'");

echo "<script> window.location.replace('../list_depa.php');</script>";



 