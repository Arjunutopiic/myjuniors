<?php
session_start();  
if(isset($_POST["sub"]))  
{  
     $_SESSION["name"] = $_POST["name"];  
     $_SESSION['last_login_timestamp'] = time();  
     header("location:index.php");       
} 
include('includes/header.php');
// include('includes/navbar.php');
// include('includes/sidebar.php');
?>
<!-- Main Wrapper -->
<div class="main-wrapper" style="margin-bottom: 0%; overflow-y: hidden;">
    <!-- Page Wrapper -->
    <!-- <div class="page" style="align-self:center;"> -->
        <div class="content container-fluid" style="margin-top: 8%; margin-bottom: 0%;">
            <!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col" style="justify-content: center;">
								<h3 class="page-title" style="font-size: 5vh;">Level Selection</h3>
								<!-- <ul class="breadcrumb">
									<li class="breadcrumb-item active">Components</li>
								</ul> -->
							</div>
						</div>
					</div>
					<!-- /Page Header -->

            <!-- Cards -->
            <div class="row" style="display: flex; justify-content:center; align-items:center;">
                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="card flex-fill bg-white">
                        <img alt="Card Image" src="assets/img/level-1.png" class="card-img-top">
                        <div class="card-header" style="display: flex; justify-content:center; align-items:center;">
                            <h5 class="card-title mb-0">L E V E L   1</h5>
                        </div>
                        <div class="card-body" style="display: flex; justify-content:center; align-items:center;">
                            <a class="btn btn-primary" href="admin.php">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="card flex-fill bg-white">
                        <img alt="Card Image" src="assets/img/level-2.png" class="card-img-top">
                        <div class="card-header" style="display: flex; justify-content:center; align-items:center;">
                            <h5 class="card-title mb-0">L E V E L   2</h5>
                        </div>
                        <div class="card-body" style="display: flex; justify-content:center; align-items:center;">
                            <a class="btn btn-primary" href="admin.php">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="card flex-fill bg-white">
                        <img alt="Card Image" src="assets/img/level-3.png" class="card-img-top">
                        <div class="card-header" style="display: flex; justify-content:center; align-items:center;">
                            <h5 class="card-title mb-0">L E V E L   3</h5>
                        </div>
                        <div class="card-body" style="display: flex; justify-content:center; align-items:center;">
                            <a class="btn btn-primary" href="admin.php">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php
        include('includes/footer.php');
        ?>