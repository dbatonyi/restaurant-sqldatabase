<?php 

    session_start();
    session_destroy();

    echo "<script>window.open('../admin_area/login.php','_self')</script>";

?>