<?php
session_start();  
if(isset($_POST["sub"]))  
{  
     $_SESSION["name"] = $_POST["name"];  
     $_SESSION['last_login_timestamp'] = time();  
     header("location:admin.php");       
} 
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Chat Now</h4>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Launch Chat Bot
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Chat Now</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe width="450" height="432"
                                            src="https://share.botstar.com/?id=sd3ab7e75-1271-4c07-87b4-d7ad01a16be7"
                                            frameborder="0" scrolling="no"
                                            allow="fullscreen; clipboard-read; clipboard-write"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <script src="https://cdn.htmlgames.com/embed.js?game=ColoringMandalas&amp;bgcolor=white"></script>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>