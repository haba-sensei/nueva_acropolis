<?php  
date_default_timezone_set('America/Lima');
$fecha_nueva = date("d/m/Y"); 

/*=============================================
LISTA DE PROYECTOS
=============================================*/
     $proyectCons = ejecutarSQL::consultar("SELECT * FROM `proyectos`"); 
     $proyectTotal = mysqli_num_rows($proyectCons);
/*=============================================
LISTA DE DEPARTAMENTOS 
=============================================*/
     $depaCons = ejecutarSQL::consultar("SELECT * FROM `departamentos`"); 
     $depaTotal = mysqli_num_rows($depaCons);
/*=============================================
PROYECTO 
=============================================*/ 
if (isset( $_GET['proyect'])) {
     $proyect_id_ = $_GET['proyect'];
     $proyectCons_single = ejecutarSQL::consultar("SELECT `proyectos`.*, `proyectos`.`id` FROM `proyectos`  WHERE `proyectos`.`id` = '$proyect_id_';"); 
}
/*=============================================
DEPARTAMENTOS 
=============================================*/ 
if (isset( $_GET['depa'])) {
     $depa_id_ = $_GET['depa'];
     $depaCons_single = ejecutarSQL::consultar("SELECT `departamentos`.*, `departamentos`.`id` FROM `departamentos`  WHERE `departamentos`.`id` = '$depa_id_';"); 
}
/*=============================================
DEPARTAMENTOS EDIT 
=============================================*/ 
if (isset( $_GET['depa'])) {
     $depa_id_edit = $_GET['depa'];
     $depaConsEdit = ejecutarSQL::consultar("SELECT `departamentos`.*, `departamentos`.`id`, `departamentos`.`nombre` AS nombre_depa, `proyectos`.*, `proyectos`.`nombre` AS nombre_proyect, `departamentos`.`proyecto_id` FROM `departamentos`, `proyectos` WHERE `departamentos`.`id` = '$depa_id_edit' AND `departamentos`.`proyecto_id` = `proyectos`.`id` "); 
}

/*=============================================
PROYECTOS EDIT
=============================================*/ 
if (isset( $_GET['proyect'])) {
     $proyect_id_edit = $_GET['proyect'];
     $proyectConsEdit = ejecutarSQL::consultar("SELECT `proyectos`.*, `proyectos`.`id` FROM `proyectos`  WHERE `proyectos`.`id` = '$proyect_id_edit';"); 
}
 

?>
 