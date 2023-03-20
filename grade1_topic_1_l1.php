<?php
session_start();  
if(isset($_POST["sub"]))  
{  
     $_SESSION["name"] = $_POST["name"];  
     $_SESSION['last_login_timestamp'] = time();  
     header("location:index.php");       
} 
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>
<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-6">

                <!-- Revenue Chart -->
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Lessons</h5>
                            </div>
                            <!-- <div class="col-6">
                                <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Teacher</li>
                                            <li><span class="circle-green"></span>Student</li>
                                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>                                       
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body" style="overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;">
                        <!-- <div id="apexcharts-area"></div> -->
                        <!-- <object data="assets/docs_pdf/AOPE.pdf"
                            width="570" height="361">
                        </object> -->
                        <iframe style="left:0;
top:0;
height:100%;
width:100%;
position:absolute;"  src="https://drive.google.com/file/d/1ZF3OKJ3G4oXkllF-Mx1cmKMipPwgrkKG/preview"
                            width="570" height="361" allow="autoplay"></iframe>
                    </div>
                </div>
                <!-- /Revenue Chart -->

            </div>

            <div class="col-md-12 col-lg-6">

                <!-- Student Chart -->
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Video</h5>
                            </div>
                            <!-- <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span>Girls</li>
                                    <li><span class="circle-green"></span>Boys</li>
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- <div id="bar"></div> -->
                        <div style="overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;"><iframe style="left:0;
top:0;
height:100%;
width:100%;
position:absolute;" src="https://drive.google.com/file/d/1DWrzEjH-XGN7bhW2RKw4qd3U3DxcSEVC/preview"
                            width="570" height="361" allow="autoplay"></iframe></div>
                    </div>
                </div>
                <!-- /Student Chart -->
            </div>
        </div>

        <div class="row">
            <div class="col d-flex">
                <!-- Star Students -->
                <div class="card flex-fill student-space comman-shadow">
                    <div class="card-header d-flex align-items-center" style="overflow:hidden !important;
padding-bottom:56.25% !important;
position:relative !important;
height:0 !important;">
                    <iframe style="left:0;
top:0;
height:100%;
width:100%;
position:absolute;" width="768" height="432" src="https://miro.com/app/live-embed/uXjVMdJ_Ciw=/?moveToViewport=-916,-599,2124,1037&embedId=523886444027" frameborder="0" scrolling="no" allow="fullscreen; clipboard-read; clipboard-write" allowfullscreen></iframe>
                </div>
                <!-- /Star Students -->
            </div>
        </div>
    </div>


</div>
<!-- /Page Wrapper -->

<?php
include('includes/footer.php');
?>