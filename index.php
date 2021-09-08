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
                                             <style>
                                 .texto_formato {
                               font-size: 60px!important
                            }
                             .ajust_box {
                                padding-right: 70px;
                            }
        
                            @media (max-width: 767px) {
                            .texto_formato {
                               font-size: 31px!important;
                                   padding-bottom: 14px;
                            }
                            .slide1-text {
                            position: relative;
                            z-index: 9;
                            left: 4px;
                            }
                             .ajust_box {
                                padding-right: 15px;
                            }
                           
                            
                            }

                           
                            </style>
                                            <span class="cd-words-wrapper texto_formato" >
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
                                            
                                            
                                            echo '<div class="col-md-4 col-12 ajust_box">
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
      
    <!--Welcome Haven section-->
    <div class="welcome-haven bg-1 fadeInUp wow" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 fadeInLeft wow welcome-pd" data-wow-delay="0.2s">
                    <div class="welcome-title">
                        <h3 class="title-1">BIENVENIDO SOMOS <br> CONSTRUCTORA E INMOBILIARIA <span>NUEVA ACROPOLIS</span></h3>
                        <h4 class="title-2">Mas que una empresa somos una familia</h4>
                    </div>
                    <div class="welcome-content"  align="justify">
                        <p>  Somos una empresa peruana dedicada a la construcción y ventas de edificios de vivienda multifamiliares con altos estándares de calidad, para ello contamos con un equipo de  profesionales capacitados haciendo uso de herramientas y materiales innovadores garantizando la calidad, seguridad y satisfacción de nuestros clientes en cada uno de nuestros proyectos.
<span>NUESTRA MISIÓN</span> 
Comprometernos con el bienestar de nuestros clientes antes, durante y después de finalizado el proyecto, con ello lograr un nivel de satisfacción y excelencia en su gestión adaptándonos a las necesidades de cada uno, logrando superar sus expectativas. Consolidar nuestro grupo humano y profesional basado en la responsabilidad, integridad y compromiso con nuestra empresa valorando el capital humano en cada uno de nuestros colaboradores
 <span>NUESTRA VISIÓN</span>  
Ser una empresa líder en construcción reconocida a nivel  nacional por su prestigio y alto compromiso en desarrollar técnicas innovadoras y de calidad para cada uno de nuestros proyectos, con la finalidad de brindar una infraestructura integra y segura para la satisfacción de  nuestros clientes.  </p>
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