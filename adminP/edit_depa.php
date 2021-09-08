<?php
include '../model/consulSQL.php';
include '../model/data.php';
include '../model/sessiones.php';
include 'addons/header.php';

?>

<body class="crm_body_bg">


    <?php include 'addons/sidebar.php'; ?>

    <section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="p-0 col-lg-12">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">

                            <div class="profile_info">
                                <img src="../img/logo/logo_3.png" alt="javascript:">
                                <div class="profile_info_iner">
                                    <p>Agente </p>
                                    <h5>Agente Inmobiliario</h5>
                                    <div class="profile_info_details">
                                    <a href="../controller/logout.controlador.php">Cerrar Session <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->
        <div class="main_content_iner ">
            <div class="p-0 container-fluid">
                <div class="row justify-content-center">

                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Editar Departamento</h3>
                                </div>
                            </div>
                            <form class="update-Form" action="controller/editDepartamento.controlador.php" method="post" role="form" enctype="multipart/form-data">
                            
                            <?php 
                                while($datos_proyect_Single=mysqli_fetch_assoc($depaConsEdit)){
                                $id_proyecto = $datos_proyect_Single['id']; 
                                $nombre_proyecto = $datos_proyect_Single['nombre_depa'];  
                                $nombre_proyecto_real = $datos_proyect_Single['nombre_proyect'];  
                                $direccion_proyecto = $datos_proyect_Single['direccion']; 
                                $imagen_proyecto = $datos_proyect_Single['imagen']; 
                                $imagenes_proyecto = $datos_proyect_Single['imagenes']; 
                                $descripcion_proyecto = $datos_proyect_Single['descripcion']; 
                                $detalles_base_proyecto = $datos_proyect_Single['detalles_base']; 
                                $detalles_extras_proyecto = $datos_proyect_Single['detalles_extras']; 
                                $plano_proyecto = $datos_proyect_Single['plano']; 
                                $video_proyecto = $datos_proyect_Single['video']; 
                                $tags_proyecto = $datos_proyect_Single['tags']; 
                                $slider_proyecto = $datos_proyect_Single['slider']; 
                                $mapa_proyecto = $datos_proyect_Single['mapa'];  

                                $imagenes_proyecto_obj = json_decode( $imagenes_proyecto, true); 
                                $detalles_base_proyecto_obj = json_decode( $detalles_base_proyecto, true); 
                                $detalles_extras_proyecto_obj = json_decode( $detalles_extras_proyecto , true); 
                                $tags_proyecto_obj = json_decode( $tags_proyecto , true); 
                            ?>
                                <input type="hidden" name="id_depa" value="<?=$id_proyecto?>">
                                <div class="form-group">
                                    <label for="nombre">Nombre del Departamento</label>
                                    <input type="texto" class="form-control" name="nombre" value="<?=$nombre_proyecto?>" id="nombre" placeholder="Ingresa el nombre del departamento">
                                </div>

                                <!-- <div class="form-group">
                                    <label for="nombre">Proyecto Asociado</label>
                                    <select class="form-control" name="proyecto_id" id="proyecto_id" style="text-transform: capitalize;">  
                                    
                                   <?php 

                                         while($datos_proyect_id=mysqli_fetch_assoc($proyectCons)){
                                            $id_proyect = $datos_proyect_id['id']; 
                                            $nombre_proyect = $datos_proyect_id['nombre']; 
                                            

                                                echo '<option value="'.$id_proyect.'" >'.$nombre_proyect.'</option>';
                                            
                                             

                                           

                                         } 
                                    ?>
                                        
                                    </select>
                                    
                                </div> -->


                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="texto" class="form-control" name="direccion" value="<?=$direccion_proyecto?>" id="direccion" placeholder="Ingresa la direccion del departamento">
                                </div>

                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="8" placeholder="Ingresa la descripcion del departamento"><?=$descripcion_proyecto?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="imagen">Imagen Principal <small>(750 x 392 Tamaño Recomendado)</small></label> 
                                    <!-- <br>
    
                                    <div  style="width:300px;">
                                    <img src="#" id="preview" style="width:300px;" alt="User Image">

                                    </div>
                                    <br> -->
                                    <input type="file" class="form-control col-md-6" name="imagen"  id="imagen" accept="image/png, image/jpg, image/jpeg">

                                    
                                    
                                </div>

                                <div class="form-group">
                                    <label for="galeria">Galeria <small>(750 x 392 Tamaño Recomendado)</small></label>
                                    
                                    <input type="file" class="form-control col-md-6" id="galeria[]" name="galeria[]" multiple="multiple" accept="image/png, image/jpg, image/jpeg"> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="plano">Plano <small>(270 x 270 Tamaño Recomendado)</small></label>
                                    <input type="file" class="form-control col-md-6" id="plano" name="plano" accept="image/png, image/jpg, image/jpeg">
                                </div>

                                <div class="form-group">
                                    <label for="video">Video Principal</label>
                                    <input type="text" class="form-control" value="<?=$video_proyecto?>" id="video" name="video">
                                </div>

                                <div class="form-group">
                                    <label for="mapa">Mapa Url</label>
                                    <input type="text" class="form-control" value='<?php echo $mapa_proyecto ?>' id="mapa" name="mapa">
                                </div>

                                <br><br>
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Etiquetas (Tags)</h3>
                                    </div>
                                </div>
                                <br> 
                                <div class="row">
                                <?php

                                for ($i=0; $i < 6; $i++) { 
                                    
                                    if (isset($tags_proyecto_obj[$i]['tag'])) {
                                       $co = $i+1;
                                        echo ' <div class="col-md-2">
                                        <label for="">Tag '.$co.'</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " value="'.$tags_proyecto_obj[$i]['tag'].'" name="tag_'.$co.'" id="tag_'.$co.'">
                                        </div>

                                    </div>';
                                   }
                                   
                                }
                                  
                                    
                                ?> 
                                   

                                    

                                </div> 
                                <br><br>
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Detalles Base</h3>
                                    </div>
                                </div>
                                <br> 
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="">Metraje</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " value="<?=$detalles_base_proyecto_obj[0]['mide']?>" name="mide" id="mide">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Habitaciones</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="habitaciones" value="<?=$detalles_base_proyecto_obj[0]['habitaciones']?>" id="habitaciones">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Baños</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="baños" value="<?=$detalles_base_proyecto_obj[0]['baños']?>" id="baños">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Cochera</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="cochera" value="<?=$detalles_base_proyecto_obj[0]['cochera']?>" id="cochera">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Cocina</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="cocina" value="<?=$detalles_base_proyecto_obj[0]['cocina']?>" id="cocina">
                                        </div>

                                    </div>

                                </div>


                                <br><br>
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Detalles Extras</h3>
                                    </div>
                                </div>
                                <br> 

                                <div class="row">
                                    <?php 

                                    foreach ($detalles_extras_proyecto_obj as $key1 => $value1) {
                                     

                                     
                                      switch ($value1['texto']) {
                                          
                                        case 'Amueblado/a':
                                        $opcion_1 = 'checked';
                                        break;
                                        case 'Jardín':
                                        $opcion_2 = 'checked';
                                        break;                                        
                                        case 'Piscina':
                                        $opcion_3 = 'checked';
                                        break;
                                        case 'Terraza':
                                        $opcion_4 = 'checked';
                                        break;
                                        case 'Mall Cercano':
                                        $opcion_5 = 'checked';
                                        break;
                                        case 'Cerca a colegios':
                                        $opcion_6 = 'checked';
                                        break;
                                        case 'Recepción':
                                        $opcion_7 = 'checked';
                                        break;
                                        case 'Cerco Electrico':
                                        $opcion_8 = 'checked';
                                        break; 
                                        case 'Area de lavandería':
                                        $opcion_9 = 'checked';
                                        break;
                                        case 'Parrilla':
                                        $opcion_10 = 'checked';
                                        break;
                                        case 'Gimnasio':
                                        $opcion_11 = 'checked';
                                        break;
                                        case 'Kitchenet':
                                        $opcion_12 = 'checked';
                                        break; 
                                        
                                        
                                      }
                                    }

                                    ?>
                                    <div class="col-md-4">
                                        <label for="">Opcion 1</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">
                                                    
                                                    <input type="checkbox" name="opcion_1" id="opcion_1"  aria-label="Checkbox for following text input" <?php if(isset($opcion_1)){ echo $opcion_1; }  ?> >

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Amueblado/a" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 2</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_2" id="opcion_2"  aria-label="Checkbox for following text input" <?php if(isset($opcion_2)){ echo $opcion_2; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Jardín" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 3</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_3" id="opcion_3" aria-label="Checkbox for following text input" <?php if(isset($opcion_3)){ echo $opcion_3; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Piscina" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 4</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_4" id="opcion_4" aria-label="Checkbox for following text input" <?php if(isset($opcion_4)){ echo $opcion_4; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Terraza" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 5</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_5" id="opcion_5" aria-label="Checkbox for following text input" <?php if(isset($opcion_5)){ echo $opcion_5; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Mall Cercano" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 6</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_6" id="opcion_6" aria-label="Checkbox for following text input" <?php if(isset($opcion_6)){ echo $opcion_6; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Cerca a colegios" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 7</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_7" id="opcion_7" aria-label="Checkbox for following text input" <?php if(isset($opcion_7)){ echo $opcion_7; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Recepción" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 8</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_8" id="opcion_8" aria-label="Checkbox for following text input" <?php if(isset($opcion_8)){ echo $opcion_8; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Cerco Electrico" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 9</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_9" id="opcion_9" aria-label="Checkbox for following text input" <?php if(isset($opcion_9)){ echo $opcion_9; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Area de lavandería" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 10</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_10" id="opcion_10" aria-label="Checkbox for following text input" <?php if(isset($opcion_10)){ echo $opcion_10; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Parrilla" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 11</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_11" id="opcion_11"  aria-label="Checkbox for following text input" <?php if(isset($opcion_11)){ echo $opcion_11; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Gimnasio" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Opcion 12</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_12" id="opcion_12" aria-label="Checkbox for following text input" <?php if(isset($opcion_12)){ echo $opcion_12; }  ?>>

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Kitchenet" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                </div>
                                
                                <div class="row">
                                <div class="col-md-12" align="center">
                                    <br><br>
                                <button  type="submit" class="text-center btn_1 full_width">Editar</button>
                                </div>

                                </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>







                </div>
            </div>

        </div>

    </section>


    <?php include 'addons/footer.php'; ?>

</body>

</html>