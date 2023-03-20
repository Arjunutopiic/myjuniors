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
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Schedule</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Schedule</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col"><div class="btn-group">
							            <a href="event.php"><button type="button" class="fc-agendaWeek-button fc-button fc-state-default fc-state-active">Calendar View</button></a>
	                                    <a href="timetable.php"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left">Table View</button></a>
	                                    <!-- <button type="button" class="btn btn-primary">3</button>
	                                    <button type="button" class="btn btn-primary">4</button> -->
	                                </div></div>
							<div class="col-auto text-end float-end ms-auto">
								<a href="add-events.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">						
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="calendar"></div>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Add Event Modal -->
					<div class="modal fade none-border" id="my_event">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Add Event</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body"></div>
								<div class="modal-footer justify-content-center">
									<button type="button" class="btn btn-success save-event submit-btn">Create event</button>
									<button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Add Event Modal -->
				</div>
			
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2022 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
			
		
			<?php
include('includes/footer.php');
?>