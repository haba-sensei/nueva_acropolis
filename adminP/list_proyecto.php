<?php 
include '../model/consulSQL.php';
include '../model/data.php';
include 'addons/header.php';

?>

<body class="crm_body_bg">


<?php include 'addons/sidebar.php'; ?>

<section class="main_content dashboard_part">



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


<div class="main_content_iner ">
        <div class="p-0 container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section"> 
                        <div class="QA_table mb_30">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Acciones</th> 
                                    </tr>
                                </thead>
                                <tbody>


                                <?php 
                                 $count = 0;
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
                        
                        $count++;
                        echo ' 
                        <tr>

                        <td>'.$count.'</td>
                        <td><a href="../images/proyectos/'.$imagen_proyecto.'"> <img src="../images/proyectos/'.$imagen_proyecto.'" > </a></td>
                        <th scope="row"> <a href="javascript:" class="capitalize question_content">'.$nombre_proyecto.'</a></th>
                        <th scope="row"> <a href="javascript:" class="question_content">'.$direccion_proyecto.'</a></th> 

                        <td>
                        <a href="edit_proyecto.php?proyect='.$id_proyecto.'" class="status_btn" style="background: #265eb5!important;">Editar</a> 
                        <br><br>
                        <a href="controller/eliminarProyecto.controlador.php?proyect='.$id_proyecto.'" class="status_btn" style="background: red!important;">Eliminar</a> 
                        </td>
                        </tr>
                        ';
                    }

                    ?>
                               
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php include 'addons/footer.php'; ?>

</body>
     
</html>