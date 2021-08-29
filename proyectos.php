<?php include 'headers/header.php'; ?>


<div class="wrapper white_bg">
    <!--Header section start-->
   <?php include 'headers/cabezera.php' ?>


    <div class="breadcrumbs overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-inner">
                        <div class="text-center breadcrumbs-title">
                            <h1>PROYECTOS EN VENTA </h1>
                        </div>
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="index.php">Inicio /</a></li>
                                <li>Propiedades</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-property pt-130">
            <div class="container">
                <!-- 2 - 3 - 4 -->
                <div class="row">
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
                        <div class="single_property mb-30 fadeInUp wow" data-wow-delay="0.2s">
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
                <br><br><br>
                <br><br><br>
            </div>
        </div>


   <?php include 'footers/pie_pag.php' ?>

</div>
 
<?php include 'footers/modal.php'; ?>
 
 
<?php include 'footers/footer.php'; ?>