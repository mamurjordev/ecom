<?php 
require_once __DIR__.'/../../../config.php';


    if(isset($_POST['submit'])){
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];

        $image = $_FILES['feature_image'];
        $gallery = $_FILES['images'];

        // feature image
        $temp_location =  $image['tmp_name'];
        $image_name = 'img/'.time().'.webp';
        move_uploaded_file($temp_location,$image_name);

        // gallery image 
        $count_gallery = count($gallery['tmp_name']);
        $gallery_image = [];
        for ($i=0; $i < $count_gallery ; $i++) { 
            $temp_location[$i] =  $gallery['tmp_name'];
            $gallery_image[$i] = 'img/'.time().'.webp';
            move_uploaded_file($temp_location[$i],$gallery_image[$i]);
        }


        // temp-userid variable until make auth
        $user_id = rand(1,3);

        $sql = "INSERT INTO products (category_id, user_id, product_name, feature_image, gallery, description, quantity, price, discount_price)
        VALUES ('$product_name', '$user_id', '$product_name', '$feature_image', '$gallery', '$description', 'quantity', 'price', 'discount_price')";
        $result = $connection->query($sql);
        

        if($result){
            echo "Product inserted successfully";
            header('location:../index.php');
        }else{
            echo "Query : $query <br><br> Error : $connection->error";
        }

    }else{
        header('location:../create.php');
    }
