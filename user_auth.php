<?php 
    // session_start();
    if(!isset( $_SESSION['user_id'])){
        $_SESSION['msg'] = "You have to logged in first";
        header('location:login.php');
        exit();
    }

?>