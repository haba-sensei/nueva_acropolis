<?php include 'headers/header.php'; ?>


<div class="wrapper white_bg">
    <!--Header section start-->
   <?php include 'headers/cabezera.php' ?>
    <!--Header section end-->

    <!--Welcome fixed text-->
    <div class="welcome-fixed-area overlay">
        <div class="display-table">
            <div class="display-tablecell">
                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <div class="slide1-text">
                                <div class="middle-text">
                                    <div class="title-1">
                                        <h3>INICIAMOS PRE-VENTA DE PROYECTOS</h3>
                                    </div>
                                    <div class="title-2">
                                        <h1 class="cd-headline letters type">
                                             
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible">Constructora</b>
                                                <b>Inmobiliaria</b> 
                                            </span>
                                        <br>
                                            Nueva Acropolis

                                        </h1>
                                    </div>
                                    <div class="desc">
                                        <p>CONTACTA CON NUESTRO EQUIPO DE AGENTES PARA BRINDARTE <br> TODA LA INFORMACIÓN QUE NECESITES!   </p>
                                    </div>
                                    <div class="contact-us">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=51924231588&text=Hola!%20estoy%20buscando%20informacion%20">CONTACTANOS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Welcome fixed text end-->
    <div class="property-area pt-100 style-2 fadeInUp wow" data-wow-delay="0.2s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-property-title" align="center">
                            <h3>PROYECTOS EN VENTA</h3>
                        </div>
                    </div>
                </div>
                 
                <div class="row pt-80">
                    <div class="col-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sale" aria-labelledby="property-sale-tab">
                                <div class="property_list owl-carousel">

                                    <div class="single_property_list row">

                                        <?php 
                                        while($datos_proyect_C=mysqli_fetch_assoc($proyectCons)){
                                            $id_proyecto = $datos_proyect_C['id']; 
                                            $nombre_proyecto = $datos_proyect_C['nombre']; 
                                            $direccion_proyecto = $datos_proyect_C['direccion']; 
                                            $imagen_proyecto = $datos_proyect_C['imagen']; 
                                            $imagenes_proyecto = $datos_proyect_C['imagenes']; 
                                            $descripcion_proyecto = $datos_proyect_C['descripcion']; 
                                            $detalles_base_proyecto = $datos_proyect_C['detalles_base']; 
                                            $detalles_extras_proyecto = $datos_proyect_C['detalles_extras']; 
                                            $plano_proyecto = $datos_proyect_C['plano']; 
                                            $video_proyecto = $datos_proyect_C['video']; 
                                            $tags_proyecto = $datos_proyect_C['tags']; 
                                            $slider_proyecto = $datos_proyect_C['slider']; 
                                            $mapa_proyecto = $datos_proyect_C['mapa']; 
                                            
                                            
                                            echo '<div class="col-md-4 col-12">
                                            <div class="single_property mb-30">
                                                <div class="single_propert_img">
                                                    <img style="width: 360px; height: 360px;" src="images/proyectos/'.$imagen_proyecto.'" alt="'.$nombre_proyecto.'">
                                                </div> 
                                                <div class="single_property-text">
                                                    <div class="single_property_inner">
                                                        <h4><a href="proyecto.php?proyect='.$id_proyecto.'">'.$nombre_proyecto.'</a></h4>
                                                        <p>'.$direccion_proyecto.'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        }

                                        ?>
 
                                    </div>

                                </div>    
                            </div>
                        </div>
                             
                    </div>
                </div>
            </div>
        </div>
    </div>
     

    <!--Feature property section start-->
    <div class="property-area fadeInUp wow mt-150" data-wow-delay="0.2s">
        <div class="container">
           <div class="row">
                    <div class="col-md-12">
                        <div class="feature-property-title" align="center">
                        <h3>NUEVOS DEPARTAMENTOS</h3>
                        </div>
                    </div>
                </div>
            
            <div class="row pt-100">
                <div class="col-12">
                    <div class="tab-content" id="property-tab-content">
                        <div role="tabpanel" class="tab-pane active" id="sale" aria-labelledby="property-sale-tab">
                            <div class="property-list owl-carousel">
                            <?php 
                            while($datos_depa_C=mysqli_fetch_assoc($depaCons)){
                                $id_depa = $datos_depa_C['id']; 
                                $nombre_depa = $datos_depa_C['nombre']; 
                                $direccion_depa = $datos_depa_C['direccion']; 
                                $imagen_depa = $datos_depa_C['imagen']; 
                                $imagenes_depa = $datos_depa_C['imagenes']; 
                                $descripcion_depa = $datos_depa_C['descripcion']; 
                                $detalles_base_depa = $datos_depa_C['detalles_base']; 
                                $detalles_extras_depa = $datos_depa_C['detalles_extras']; 
                                $plano_depa = $datos_depa_C['plano']; 
                                $video_depa = $datos_depa_C['video']; 
                                $tags_depa = $datos_depa_C['tags']; 
                                $slider_depa = $datos_depa_C['slider']; 
                                $mapa_depa = $datos_depa_C['mapa']; 

                                $detalles_base_depa_obj = json_decode( $detalles_base_depa, true); 
                                
                                echo '
                                <div class="item">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="departamento.php?depa='.$id_depa.'">
                                                <img src="images/departamentos/'.$imagen_depa.'" alt="'.$nombre_depa.'">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6 class="capitalize"><a href="departamento.php?depa='.$id_depa.'">'.$nombre_depa.'</a></h6>
                                                <h4 class="price"></h4>
                                                <div class="property-location">
                                                    <p><img src="img/property/icon-5.png" alt="">'.$direccion_depa.' </p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                        
                                                    <li>
                                                    <img src="img/property/icon-'.$detalles_base_depa_obj[0]['icon1'].'.png" alt="">
                                                    <span>'.$detalles_base_depa_obj[0]['mide'].'</span>
                                                    </li>
                
                                                    <li>
                                                    <img src="img/property/icon-'.$detalles_base_depa_obj[0]['icon2'].'.png" alt="">
                                                    <span>'.$detalles_base_depa_obj[0]['habitaciones'].'</span>
                                                    </li>
                
                                                    <li>
                                                    <img src="img/property/icon-'.$detalles_base_depa_obj[0]['icon3'].'.png" alt="">
                                                    <span>'.$detalles_base_depa_obj[0]['baños'].'</span>
                                                    </li>
                
                                                    <li>
                                                    <img src="img/property/icon-'.$detalles_base_depa_obj[0]['icon4'].'.png" alt="">
                                                    <span>'.$detalles_base_depa_obj[0]['cochera'].'</span>
                                                    </li>
                                            
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }

                            ?>
                                
                                 
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Feature property section end-->

    <!--Welcome Haven section-->
    <div class="welcome-haven bg-1 fadeInUp wow" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 fadeInLeft wow welcome-pd" data-wow-delay="0.2s">
                    <div class="welcome-title">
                        <h3 class="title-1">BIENVENIDO SOMOS <br> CONSTRUCTORA E INMOBILIARIA <span>NUEVA ACROPOLIS</span></h3>
                        <h4 class="title-2">NUESTRA PRIORIDAD SON NUESTROS CLIENTES!</h4>
                    </div>
                    <div class="welcome-content"  >
                        <p> <span>NUESTRA MISIÓN</span> 
                            Somos una empresa constructora dedicada a la construcción y comercialización de edificios de vivienda multifamiliares con altos estándares de calidad e innovación, para ello contamos con profesionales capacitados y trabajamos con materiales de mayor calidad  que nos permiten brindar seguridad a nuestros clientes y satisfacción por nuestros acabados innovadores.
                            Nos comprometemos con el bienestar de nuestros clientes antes, durante y después de finalizado el proyecto, y  ello nos permite forjar relaciones de confianza.
                            <span>NUESTRA VISIÓN</span>  
                            Seremos una  empresa líder en construcción reconocida a nivel nacional, por la atención brindada a nuestros clientes y por la calidad y cumplimiento de las más exigentes normas de seguridad para llevar acabo nuestros edificios.</p>
                    </div>
                     
                </div>
                <div class="col-lg-6 col-12">
                    <div class="welcome-haven-img fadeInRight wow" data-wow-delay="0.2s">
                        <img src="img/welcome/1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Welcome Haven section end-->

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
    <!--Download apps section end-->

    
     
    <!--Brand section end-->
  
   <?php include 'footers/pie_pag.php' ?>

</div>
 
<?php include 'footers/modal.php'; ?>
 
 
<?php include 'footers/footer.php'; ?>