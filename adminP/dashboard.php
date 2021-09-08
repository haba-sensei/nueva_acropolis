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
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                             
                        </div>
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
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity d-flex">
                                            <div class="icon">
                                                <img src="img/icon/ciudad.svg" alt="">
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter"><?php echo $proyectTotal ?></span> </h3>
                                                <p>Proyectos</p>
                                            </div>
                                        </div>
                                        <div class="single_quick_activity d-flex">
                                            <div class="icon">
                                                <img src="img/icon/casa.svg" alt="">
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter"><?php echo $depaTotal ?></span> </h3>
                                                <p>Departamentos</p>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
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

