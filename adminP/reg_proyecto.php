<?php
include '../model/consulSQL.php';
include '../model/data.php';
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
                                    <h3 class="mb-0">Crear Proyecto</h3>
                                </div>
                            </div>
                            <form class="update-Form" action="controller/newProyect.controlador.php" method="post" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nombre">Nombre del proyecto</label>
                                    <input type="texto" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre del proyecto">
                                </div>


                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="texto" class="form-control" name="direccion" id="direccion" placeholder="Ingresa la direccion del proyecto">
                                </div>

                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="8" placeholder="Ingresa la descripcion del proyecto"></textarea>
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
                                    <input type="text" class="form-control" id="video" name="video">
                                </div>

                                <div class="form-group">
                                    <label for="mapa">Mapa Url</label>
                                    <input type="text" class="form-control" id="mapa" name="mapa">
                                </div>

                                <br><br>
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Etiquetas (Tags)</h3>
                                    </div>
                                </div>
                                <br> 
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="">Tag 1</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="tag_1" id="tag_1">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                    <label for="">Tag 2</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control "  name="tag_2" id="tag_2">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                    <label for="">Tag 3</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control "  name="tag_3" id="tag_3">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                    <label for="">Tag 4</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control "  name="tag_4" id="tag_4">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                    <label for="">Tag 5</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control "  name="tag_5" id="tag_5">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                    <label for="">Tag 6</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control "  name="tag_6" id="tag_6">
                                        </div>

                                    </div>

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
                                            <input type="text" class="form-control " name="mide" id="mide">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Habitaciones</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="habitaciones" id="habitaciones">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Baños</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="baños" id="baños">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Cochera</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="cochera" id="cochera">
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="">Cocina</label>
                                        <div class="mb-3 input-group"> 
                                            <input type="text" class="form-control " name="cocina" id="cocina">
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
                                    
                                    <div class="col-md-4">
                                        <label for="">Opcion 1</label>
                                        <div class="mb-3 input-group">

                                            <div class="input-group-prepend">

                                                <div class="input-group-text">

                                                    <input type="checkbox" name="opcion_1" id="opcion_1" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_2" id="opcion_2"  aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_3" id="opcion_3" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_4" id="opcion_4" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_5" id="opcion_5" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_6" id="opcion_6" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_7" id="opcion_7" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_8" id="opcion_8" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_9" id="opcion_9" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_10" id="opcion_10" aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_11" id="opcion_11"  aria-label="Checkbox for following text input">

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

                                                    <input type="checkbox" name="opcion_12" id="opcion_12" aria-label="Checkbox for following text input">

                                                </div>
                                            </div>
                                            <input type="text" readonly class="form-control " value="Kitchenet" aria-label="Text input with checkbox">
                                        </div>

                                    </div>

                                </div>
                                
                                <div class="row">
                                <div class="col-md-12" align="center">
                                    <br><br>
                                <button  type="submit" class="text-center btn_1 full_width">Guardar</button>
                                </div>

                                </div>
                               
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