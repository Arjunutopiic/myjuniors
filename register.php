<?php
include('includes/header.php');
// include('includes/navbar.php');
// include('includes/sidebar.php');
?>

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/login.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Sign Up</h1>
								<p class="account-subtitle">Enter details to create your account</p>
								
								<!-- Form -->
								<form action="grade-selection.php">
									<div class="form-group">
										<label >Username <span class="login-danger">*</span></label>
										<input class="form-control" type="text" >
										<span class="profile-views"><i class="fas fa-user-circle"></i></span>
									</div>
									<div class="form-group">
										<label >Email <span class="login-danger">*</span></label>
										<input class="form-control" type="text" >
										<span class="profile-views"><i class="fas fa-envelope"></i></span>
									</div>
									<div class="form-group">
										<label >Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" type="text" >
										<span class="profile-views feather-eye toggle-password"></span>
									</div>
									<div class="form-group">
										<label >Confirm password <span class="login-danger">*</span></label>
										<input class="form-control pass-confirm" type="text" >
										<span class="profile-views feather-eye reg-toggle-password"></span>
									</div>
									<div class="form-group">
										<label >Grades<span class="login-danger">*</span></label>
										<input class="form-control" type="text" >
										<span class="profile-views"><i class="fas fa-user-circle"></i></span>
									</div>
									<div class=" dont-have">Already Registered?  <a href="index.php">Login</a></div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" ><i class="fab fa-google-plus-g"></i></a>
									<a href="#" ><i class="fab fa-facebook-f"></i></a>
									<a href="#" ><i class="fab fa-twitter"></i></a>
									<a href="#" ><i class="fab fa-linkedin-in"></i></a>
								</div>
								<!-- /Social Login -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

<?php
include('includes/footer.php');
?>