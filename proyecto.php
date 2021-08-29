<?php include 'headers/header.php'; ?>


<div class="wrapper white_bg">
    <!--Header section start-->
   <?php include 'headers/cabezera.php' ?>
 
    <?php 
    while($datos_proyect_Single=mysqli_fetch_assoc($proyectCons_single)){
        $id_proyecto = $datos_proyect_Single['id']; 
        $nombre_proyecto = $datos_proyect_Single['nombre']; 
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
    <div class="breadcrumbs overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-inner">
                        <div class="text-center breadcrumbs-title">
                            <h1><?=$nombre_proyecto?></h1>
                        </div>
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="index.php">Inicio /</a></li>
                                <li>Detalles del proyecto</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property properties-list pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 ">
                        <div class="single-property-details">
                            <div class="single-property-area">
                                <div class="single-property-tab-content tab-content">
                                 
                                <?php 
                                
                                    foreach ($imagenes_proyecto_obj as $key => $value) {
                                    
                                   

                                    if ($key == 0) {
                                        echo '
                                        <div class="tab-pane fade show active" id="image-'.$key.'" role="tabpanel"
                                        aria-labelledby="image-'.$key.'-tab">
                                        <img src="images/proyectos/'.$value['imagen'].'" style="width: 750px; height: 392px;" alt="'.$nombre_proyecto.'">
                                        </div> 
                                        ';
                                    } else {
                                        echo '
                                        <div class="tab-pane fade " id="image-'.$key.'" role="tabpanel"
                                        aria-labelledby="image-'.$key.'-tab">
                                        <img src="images/proyectos/'.$value['imagen'].'" style="width: 750px; height: 392px;" alt="'.$nombre_proyecto.'">
                                        </div> 
                                        ';
                                    }

                                       
                                    }
                                
                                
                                ?>
                              
                                </div>
                                <div class="mt-20 nav single-property-tab-slider owl-carousel indicator-style2">

                                <?php 
                                
                                foreach ($imagenes_proyecto_obj as $key => $value) {
                                
                               

                                if ($key == 0) {
                                    echo ' 
                                    <div class="nav-item">
                                    <a class="nav-link" href="#image-'.$key.'" id="image-'.$key.'-tab"
                                        data-toggle="tab" role="tab" aria-controls="image-'.$key.'"
                                        aria-selected="true">

                                        <img src="images/proyectos/'.$value['imagen'].'" alt="'.$nombre_proyecto.'">
                                    </a>
                                    </div>
                                    ';
                                } else {
                                    echo '
                                    <div class="nav-item">
                                    <a class="nav-link" href="#image-'.$key.'" id="image-'.$key.'-tab"
                                        data-toggle="tab" role="tab" aria-controls="image-'.$key.'"
                                        aria-selected="true">
                                        <img src="images/proyectos/'.$value['imagen'].'" alt="'.$nombre_proyecto.'">
                                    </a>
                                </div>
                                    ';
                                }

                                   
                                }
                            
                            
                            ?>

                                    
                                    
                                </div>
                            </div>
                           
                            <div class="condition-amenities">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="property-condition">
                                            <div class="condtion-title">
                                                <h5>Condicion</h5>
                                            </div>
                                            <div class="property-condition-list">
                                                <ul>
                                                    
                                                    <?php  
                                                    echo '
                                                    
                                                    <li>
                                                    <img src="img/property/icon-dark-'.$detalles_base_proyecto_obj[0]['icon1'].'.png" alt="">
                                                    <span>'.$detalles_base_proyecto_obj[0]['mide'].'</span>
                                                    </li>
        
                                                    <li>
                                                    <img src="img/property/icon-dark-'.$detalles_base_proyecto_obj[0]['icon2'].'.png" alt="">
                                                    <span>'.$detalles_base_proyecto_obj[0]['habitaciones'].'</span>
                                                    </li>

                                                    <li>
                                                    <img src="img/property/icon-dark-'.$detalles_base_proyecto_obj[0]['icon3'].'.png" alt="">
                                                    <span>'.$detalles_base_proyecto_obj[0]['baños'].'</span>
                                                    </li>
        
                                                    <li>
                                                    <img src="img/property/icon-dark-'.$detalles_base_proyecto_obj[0]['icon4'].'.png" alt="">
                                                    <span>'.$detalles_base_proyecto_obj[0]['cochera'].'</span>
                                                    </li>

                                                    <li>
                                                    <img src="img/property/icon-dark-'.$detalles_base_proyecto_obj[0]['icon5'].'.png" alt="">
                                                    <span>'.$detalles_base_proyecto_obj[0]['cocina'].'</span>
                                                    </li>
                                                   
                                                    ';
                                                    
                                                    
                                                    
                                                    ?>
                                                </ul>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="amenities">
                                            <div class="amenities-title">
                                                <h5>Detalles</h5>
                                            </div>
                                            <div class="amenities-list">
                                                <ul>

                                                <?php
                                                foreach ($detalles_extras_proyecto_obj as $key1 => $value1) { 
                                                    echo '<li><i class="fa fa-check-square-o"></i> <span>'.$value1['texto'].'</span></li>'; 
                                                }
                                                
                                                ?> 

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="planning">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="plan-title">
                                            <h5>Plano </h5>
                                        </div>
                                        <div class="plan-map">
                                            <?php
                                            
                                            echo ' <img src="images/proyectos/'.$plano_proyecto.'" alt="">'; 
                                            

                                            ?> 
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-12">
                                        <div class="plan-title">
                                            <h5>Ubicación</h5>
                                        </div>
                                        <div class="vimeo-video">
                                            <div class="embed-responsive mb-100 embed-responsive-4by3">
                                            <?=$mapa_proyecto ?> 
                                                     
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12">
                        <div class="sidebar right-side">
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Descripción del proyecto</h5>
                                </div>
                                <div class="find_home-box">
                                    <div class="find_home-box-inner">
                                    <div class="description-inner">
                                    <p class="text-1"> <?=$descripcion_proyecto ?> </p>
                                    
                                     
                                </div>
                                <style>
                                .add-property>a:hover {
                                border-color: #ff000000!important;
                                color: white;
                                background: #36cc1b none repeat scroll 0 0;
                                }
                                </style>
                                    <div class="add-property">
                                        <?php  $nombre_filtrado = str_replace(" ", "%20", $nombre_proyecto); ?>
                                        <a  target="_blank" href="https://api.whatsapp.com/send?phone=51924231588&text=Hola!%20estoy%20buscando%20informacion%20sobre%20<?=$nombre_filtrado?>">CONSULTAR CON UN AGENTE</a>
                                    
                                    </div>
                                    </div>
                                </div>
                            </aside>
                            
                            <aside class="single-side-box tags">
                                <div class="aside-title">
                                    <h5>Etiquetas</h5>
                                </div>
                                <div class="our-tag-list">
                                    <ul>
                                    <?php
                                    foreach ($tags_proyecto_obj as $key2 => $value2) { 
                                        echo '<li><a href="javascript:">'.$value2['tag'].'</a></li>'; 
                                    }
                                    
                                    ?> 
                                       
                                        
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box video">
                                <div class="aside-title">
                                    <h5>Recorrido del proyecto</h5>
                                </div>
                                <div class="video-sidebar">
                                    <div class="video-img">
                                        <img src="img/common/video.jpg" alt="">
                                    </div>
                                    <div class="play-button">
                                        <a href="<?=$video_proyecto?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
 <!--Download apps section start-->
 <div class="download-apps overlay-blue mb-100 fadeInUp wow" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="download-apps-desc wow fadeInDown" data-wow-delay="0.1s">
                        <div class="download-apps-title">
                            <h3 class="title-1">CONOCE NUESTROS PROYECTOS MAS RECIENTES</h3> 
                        </div>
                        <div class="download-apps-bottom">
                            <p>¡DISFRUTA DE ESPACIOS ILUMINADOS Y AMPLIOS! DEPARTAMENTOS EN VENTA TENEMOS NUEVOS PROYECTOS EN VENTA ENCUENTRALOS !</p>
                            <a href="proyectos.php">VER PROYECTOS</a>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
     



   <?php include 'footers/pie_pag.php' ?>

</div>
 
<?php include 'footers/modal.php'; ?>
 
 
<?php include 'footers/footer.php'; ?>