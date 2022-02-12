<?php  session_start();

if(session_destroy()){
    $_SESSION['msg'] = "Logout successfully";
    header('location: login.php');
}