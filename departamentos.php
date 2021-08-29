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
                            <h1>DEPARTAMENTOS</h1>
                        </div>
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="index.php">Inicio /</a></li>
                                <li>Departamentos</li>
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        </div>
                        ';
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