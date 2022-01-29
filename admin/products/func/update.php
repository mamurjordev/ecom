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
        // temp-userid variable until make auth
        $user_id = rand(1,3);

        // esisting feature image
        $sql = "SELECT feature_image FROM products WHERE product_id='$id'";
        $data = $connection->query($sql);
        foreach($data as $value){
            $existing_feature_image = $value['feature_image'];
        }



        // feature image
        if(isset($_FILES['feature_image'])){
            $image = $_FILES['feature_image'];

            // feature image
            $temp_location =  $image['tmp_name'];
            $image_name = 'img/'.time().'.webp';
            move_uploaded_file($temp_location,$image_name);

            // delete existing feature image
            unlink($existing_feature_image);
        }else{
            $image_name = $existing_feature_image;
        }

        // gallery image processing

        // esisting gallery image
        $sql = "SELECT gallery FROM products WHERE product_id='$id'";
        $data = $connection->query($sql);
        foreach($data as $value){
            $existing_gallery = $value['gallery']; // existing gallery image on db
        }
        $existing_gallery = json_decode($existing_gallery);

        $old_gallery_count = count($existing_gallery);


       if(isset($_REQUEST['old']) || isset($_FILES['images'])){
           
           for ($i=0; $i <   $old_gallery_count ; $i++) { 
               if(!in_array($i,$_REQUEST['old'])){
                    unlink($existing_gallery[$i]); // delete image from directory
                    unset($existing_gallery[$i]); // remove array item form gallery image
               }
           }

           if(isset($_FILES['images'])){
                $gallery = $_FILES['images'];
                // gallery image 
                $count_gallery = count($gallery['tmp_name']);
                $gallery_image = [];
                for ($i=0; $i < $count_gallery ; $i++) { 
                    $temp_location[$i] =  $gallery['tmp_name'];
                    $gallery_image[$i] = 'img/'.time().'.webp';
                    move_uploaded_file($temp_location[$i],$gallery_image[$i]);

                    array_push($existing_gallery,$gallery_image[$i]); // push new image on exiisting images array
                }
                $gallery_image = json_encode($existing_gallery);

           }
       }


        $sql = "UPDATE products SET category_id='$category_id', user_id='$user_id', product_name='$product_name',description = '$description', quantity = '$quantity', price='$price', discount_price='$discount_price', feature_image='$image_name', gallery='$gallery_image' WHERE product_id='$id'";


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
