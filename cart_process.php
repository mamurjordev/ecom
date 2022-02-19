<?php 
require "config.php";
session_start();
require('user_auth.php'); // to check user auth

$user_id = $_SESSION['user_id'];

if(isset($_REQUEST['product_id'])){

    // cart info
    $product_id = $_REQUEST['product_id'];
    $qty = 1;

    // get product
    $getProductSql = "SELECT * from products where product_id='$product_id'";
    $productQuery = $connection->query($getProductSql);
    foreach ($productQuery as $productData) //retrive data form productQuery

    // check discount have or not
    if($productData['discount_price']!=null){
        $product_price = $productData['discount_price'];
    }else{
        $product_price = $productData['price'];
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


// remove from cart
if(isset($_REQUEST['cart_remove'])){
    $cart_id = $_REQUEST['cart_remove'];
    $checkUserSql = "SELECT user_id FROM carts where cart_id = '$cart_id'";
    $cartData = $connection->query($checkUserSql);

    foreach ($cartData as $cart)
    
    if($cart['user_id']==$user_id){
        
        $cartRemoveSql = "DELETE FROM carts WHERE cart_id = '$cart_id'";
        $removeResult = $connection->query($cartRemoveSql);

        if($removeResult){
            $_SESSION['msg'] = "Product removed from cart !";

            // redirect to previous url
            $url = 'cart.php';
            header("location: $url");
        }else{
            // if fails to query execution
            $_SESSION['msg'] = "Fails to remove product form cart !";

            // redirect to previous url
            $url = 'cart.php';
            header("location: $url");
        }

        exit();
    }

    // if cart id & user id don't match
    $_SESSION['msg'] = "Fails to remove product form cart !";

    // redirect to previous url
    $url = 'cart.php';
    header("location: $url");
}
