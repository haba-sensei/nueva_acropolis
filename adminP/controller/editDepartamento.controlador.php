<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php'; 


$id_proyecto = $_POST['id_depa'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$proyecto_id = $_POST['proyecto_id'];
$descripcion = $_POST['descripcion']; 
$video = $_POST['video'];
$mapa = $_POST['mapa'];


$mide = $_POST['mide'];
$habitaciones = $_POST['habitaciones'];
$baños = $_POST['baños'];
$cochera = $_POST['cochera'];
$cocina = $_POST['cocina'];

$tags_[0] = $_POST['tag_1'];
$tags_[1] = $_POST['tag_2'];
$tags_[2] = $_POST['tag_3'];
$tags_[3] = $_POST['tag_4'];
$tags_[4] = $_POST['tag_5'];
$tags_[5] = $_POST['tag_6'];


$opcion_[1] = $_POST['opcion_1'];
$opcion_[2] = $_POST['opcion_2'];
$opcion_[3] = $_POST['opcion_3'];
$opcion_[4] = $_POST['opcion_4'];
$opcion_[5] = $_POST['opcion_5'];
$opcion_[6] = $_POST['opcion_6'];
$opcion_[7] = $_POST['opcion_7'];
$opcion_[8] = $_POST['opcion_8'];
$opcion_[9] = $_POST['opcion_9'];
$opcion_[10] = $_POST['opcion_10'];
$opcion_[11] = $_POST['opcion_11'];
$opcion_[12] = $_POST['opcion_12']; 


// print_r($insertar_data);


if ($nombre != '' && $direccion != '' && $descripcion != ''  && $mapa != '' && $mide != '' && $habitaciones != '' && $baños != '' && $cochera != '' ) {
   

   
if (!empty($_FILES['imagen']['name'])) {
            
    $file_nameImagen = ""; 
    
    $fileNameImagen = $_FILES['imagen']['name']; 
    $extension = pathinfo($fileNameImagen, PATHINFO_EXTENSION);
    $allowExtn = array('png', 'jpeg', 'jpg');

    if (in_array($extension, $allowExtn)) {
    $newNameImagen = rand() . ".". $extension;
    $uploadFilePathImagen = "../../images/departamentos/".$newNameImagen;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $uploadFilePathImagen);

    $imagen = $newNameImagen;
    }
    consultasSQL::UpdateSQL("departamentos",  "imagen='$imagen'",  "id='$id_proyecto'");
}

if (!empty($_FILES['plano']['name'])) {
            
    $file_namePlano = ""; 

    $fileNamePlano = $_FILES['plano']['name']; 
    $extensionPlano = pathinfo($fileNamePlano, PATHINFO_EXTENSION);
    $allowExtn = array('png', 'jpeg', 'jpg');

    if (in_array($extensionPlano, $allowExtn)) {
    $newNamePlano = rand() . ".". $extensionPlano;
    $uploadFilePathPlano = "../../images/departamentos/".$newNamePlano;
    move_uploaded_file($_FILES['plano']['tmp_name'], $uploadFilePathPlano);

    $plano = $newNamePlano;
    }

    consultasSQL::UpdateSQL("departamentos",  "plano='$plano'",  "id='$id_proyecto'");
}

if (!empty($_FILES['galeria']['name'])) {
            
    $file_name = "";

    $totalFile = count($_FILES['galeria']['name']);

    for ($h=0; $h < $totalFile ; $h++) {

        $fileName = $_FILES['galeria']['name'][$h]; 
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowExtn = array('png', 'jpeg', 'jpg');

        if (in_array($extension, $allowExtn)) {
        $newName = rand() . ".". $extension;
        $uploadFilePath = "../../images/departamentos/".$newName;
        move_uploaded_file($_FILES['galeria']['tmp_name'][$h], $uploadFilePath);

        $file_name .= $newName.",";	

            $carga_galeria[] = array(
                'imagen' =>  $newName
            );
        }
    }


    $imagenes = json_encode($carga_galeria, JSON_UNESCAPED_UNICODE);

    consultasSQL::UpdateSQL("departamentos",  "imagenes='$imagenes'",  "id='$id_proyecto'");

}



$array1 = array(
    'mide' =>  $mide,
    'icon1' =>  '1'
);

$array2 = array(
    'habitaciones' =>  $habitaciones,
    'icon2' =>  '2'
);

$array3 = array(
    'baños' =>  $baños,
    'icon3' =>  '3'
);

$array4 = array(
    'cochera' =>  $cochera,
    'icon4' =>  '4'
);

$array5 = array(
    'cocina' =>  $cocina,
    'icon5' =>  '5'
);



$resultado_base[] = array_merge($array1, $array2, $array3, $array4, $array5);
$detalles_base = json_encode($resultado_base, JSON_UNESCAPED_UNICODE);

 
    for ($i=0; $i < 5 ; $i++) { 

        $tag_array[] = array(
            'tag' =>  $tags_[$i]
        );

    }

    $tags = json_encode($tag_array, JSON_UNESCAPED_UNICODE);

    for ($f=1; $f < 12 ; $f++) { 

        if ($opcion_[$f] != null) {
           
            switch ($f) {
                case 1:
                    $opcion_switch = 'Amueblado/a';
                break;
                case 2:
                    $opcion_switch = 'Jardín';
                break;
                case 3:
                    $opcion_switch = 'Piscina';
                break;
                case 4:
                    $opcion_switch = 'Terraza';
                break;
                case 5:
                    $opcion_switch = 'Mall Cercano';
                break;
                case 6:
                    $opcion_switch = 'Cerca a colegios';
                break;
                case 7:
                    $opcion_switch = 'Recepción';
                break;
                case 8:
                    $opcion_switch = 'Cerco Electrico';
                break;
                case 9:
                    $opcion_switch = 'Area de lavandería';
                break;
                case 10:
                    $opcion_switch = 'Parrilla';
                break;
                case 11:
                    $opcion_switch = 'Gimnasio';
                break;
                case 12:
                    $opcion_switch = 'Kitchenet';
                break;
                
                 
            }
    
    
            $opcion_array[] = array(
                'texto' =>  $opcion_switch
            );



        }

        

    }

    $detalles_extra = json_encode($opcion_array, JSON_UNESCAPED_UNICODE);
 
    consultasSQL::UpdateSQL("departamentos", 
        "nombre='$nombre',
        direccion='$direccion', 
        proyecto_id='$proyecto_id',
        descripcion='$descripcion',       
        detalles_base='$detalles_base',
        detalles_extras='$detalles_extra', 
        video='$video',
        tags='$tags',
        mapa='$mapa'   
        ", 
    "id='$id_proyecto'");
 
    
     echo "<script> window.location.replace('../list_depa.php');</script>";


}



       



 