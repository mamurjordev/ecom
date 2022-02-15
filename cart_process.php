<?php 
require "config.php";
session_start();
if(isset($_REQUEST['product_id'])){
    require('user_auth.php'); // to check user auth

    // cart info
    $product_id = $_REQUEST['product_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO carts(user_id,product_id) VALUES( '$user_id', '$product_id')";

    $query = $connection->query($sql);
    if($query){
        $_SESSION['msg'] = "Product added successfully on your cart";

        // redirect to previous url
        $url = $_SERVER['HTTP_REFERER'];
        header("location: $url");

    }else{
        echo "fails";
    }
    
}
