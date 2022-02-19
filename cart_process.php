<?php 
require "config.php";
session_start();
if(isset($_REQUEST['product_id'])){
    require('user_auth.php'); // to check user auth

    // cart info
    $product_id = $_REQUEST['product_id'];
    $user_id = $_SESSION['user_id'];
    $qty = 1;

    // get product
    $getProductSql = "SELECT * from products where product_id='$product_id'";
    $productQuery = $connection->query($getProductSql);
    foreach ($productQuery as $productData) //retrive data form productQuery

    // check discount have or not
    if($productData['discount_price']!=null){
        $product_price = $productData['price'];
    }else{
        $product_price = $productData['discount_price'];
    }

    $sql = "INSERT INTO carts(user_id,product_id,buy_price, qty) VALUES( '$user_id', '$product_id', '$product_price','$qty')";

    $query = $connection->query($sql);
    if($query){
        $_SESSION['msg'] = "Product added successfully on your cart";

        // redirect to previous url
        $url = $_SERVER['HTTP_REFERER'];
        header("location: $url");

    }else{
        $_SESSION['msg'] = "Fails to add you product on cart !";

        // redirect to previous url
        $url = $_SERVER['HTTP_REFERER'];
        header("location: $url");
    }
    
}
