<?php 
require_once __DIR__.'/../../../config.php';


    if(isset($_POST['submit'])){

        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];

        $id = $_REQUEST['id'];

        $sql = "UPDATE products SET category_id='$category_id', user_id='$user_id', product_name='$product_name',description = '$description', quantity = '$quantity', price='$price', discount_price='$discount_price' WHERE product_id='$id'";



        $result = $connection->query($sql);

        if($result){
            echo "Product inserted successfully";
            header('location:../index.php');
        }else{
            echo "Query : $sql <br><br> Error : $connection->error";
        }

    }else{
        header('location:../create.php');
    }
