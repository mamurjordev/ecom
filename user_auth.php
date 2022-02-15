<?php 
    // session_start();
    if(!isset( $_SESSION['user_id'])){
        $url = str_replace('/PHP/ecom/','',$_SERVER['REQUEST_URI']);
        $_SESSION['redirect_url']=$url;//set redirect url 

        $_SESSION['msg'] = "To access those resource, You have to logged in first";
        header('location:login.php');
        exit();
    }

?>