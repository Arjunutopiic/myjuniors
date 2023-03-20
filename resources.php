<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Live Class</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Class</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill bg-white">
                    <iframe width="368" height="432"
                        src="https://us06web.zoom.us/j/84727651374?pwd=T1YvODVHbjR0eXJxRjRlS2xsdjdHdz09" frameborder="0"
                        scrolling="no" allow="fullscreen; clipboard-read; clipboard-write" allowfullscreen></iframe>
                    <!-- insert where you want your wall (change the data-dowall "code" to the code from your wall) -->
                    <!-- <div data-dowall="64004c35484af6001aebba40"></div> -->
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill bg-white">
                    <iframe width="768" height="432"
                        src="https://miro.com/app/embed/uXjVPhrg9Xo=/?pres=1&frameId=3458764547805514933&embedId=998999814801"
                        frameborder="0" scrolling="no" allow="fullscreen; clipboard-read; clipboard-write"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Use of this SDK is subject to our Terms of Service: https://explore.zoom.us/en/legal/zoom-api-license-and-tou -->

<!-- insert once before closing body tag -->
<script async src="https://cdn.dowall.tv/embed.js?event=64004c35484af6001aebba3e"></script>

<!-- Dependencies for client view and component view -->
<script src="https://source.zoom.us/2.9.5/lib/vendor/react.min.js"></script>
<script src="https://source.zoom.us/2.9.5/lib/vendor/react-dom.min.js"></script>
<script src="https://source.zoom.us/2.9.5/lib/vendor/redux.min.js"></script>
<script src="https://source.zoom.us/2.9.5/lib/vendor/redux-thunk.min.js"></script>
<script src="https://source.zoom.us/2.9.5/lib/vendor/lodash.min.js"></script>

<!-- CDN for client view -->
<!-- <script src="https://source.zoom.us/zoom-meeting-2.9.5.min.js"></script> -->

<!-- CDN for component view -->
<script src="https://source.zoom.us/zoom-meeting-embedded-2.9.5.min.js"></script>

<?php
include('includes/footer.php');
?>