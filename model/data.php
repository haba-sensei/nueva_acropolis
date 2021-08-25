<?php  
date_default_timezone_set('America/Lima');
$fecha_nueva = date("d/m/Y"); 
/*=============================================
CONTADOR DE MEDICOS 
=============================================*/
     $medCons = ejecutarSQL::consultar("SELECT * FROM `medicos`");
     $medTotal = mysqli_num_rows($medCons);
/*=============================================
TODAS LAS ESPECIALIDADES 
=============================================*/
     $espeCons = ejecutarSQL::consultar("SELECT * FROM `especialidades`");
/*=============================================
MINIMO Y MAXIMO RANGO DE PRECIOS CONSULTA
=============================================*/
     $maximoCons = ejecutarSQL::consultar("SELECT `perfil`.`precio_consulta` FROM `perfil` ORDER BY `perfil`.`precio_consulta` DESC LIMIT 1");
/*=============================================
BANNER FASHION TRENDS 
=============================================*/
     $listMedicos = ejecutarSQL::consultar("SELECT `medicos`.`nombre_completo`, `perfil`.*, `perfil`.`correo`, `medicos`.`estado` FROM `medicos` , `perfil` WHERE `perfil`.`correo` = `medicos`.`correo` AND `medicos`.`estado` = '1'");
/*=============================================
LISTA DE CONSULTAS PACIENTE ONLINE
=============================================*/
     $listConsultasOnline = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`email_usuario` = '$correo_' AND `agenda`.`tipo_cita` = 'online' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
LISTA DE CONSULTAS PACIENTE PRESENCIAL
=============================================*/
     $listConsultasPresencial = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`email_usuario` = '$correo_' AND `agenda`.`tipo_cita` = 'presencial' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
TOTAL DE PACIENTES DASH MEDICO
=============================================*/
     $ConsPacientes = ejecutarSQL::consultar("SELECT DISTINCT email_usuario FROM agenda");
     $totalPacientes = mysqli_num_rows($ConsPacientes);
/*=============================================
LISTA DE CITAS DEL DIA AGENDA DEL MEDICO
=============================================*/ 
     $consDiaAgendaMed = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`cod_medico` = '$codigo_referido_' AND `agenda`.`fecha_start` = '$fecha_nueva' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
LISTA DE CITAS GENERALES AGENDA MEDICO
=============================================*/
     $consGenralAgendaMed = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`cod_medico` = '$codigo_referido_' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
 LISTA DE OPCIONES ORIGINAL
=============================================*/
     $listPacientesMed = ejecutarSQL::consultar("SELECT DISTINCT `agenda`.`email_usuario`, `agenda`.`cod_medico` FROM `agenda` WHERE `agenda`.`cod_medico` = '$codigo_referido_'");
/*=============================================
HISTORICO DE PAGO
=============================================*/
    $historial_full_pago = ejecutarSQL::consultar("SELECT `pagos_medicos`.*, `pagos_medicos`.`cod_med` FROM `pagos_medicos` WHERE `pagos_medicos`.`cod_med` = '$codigo_referido_';");
    $monto_historico = 0;
    while($datos_med_C=mysqli_fetch_assoc($historial_full_pago)){
     $monto_historico += $datos_med_C['monto']; 
    }



?>
 