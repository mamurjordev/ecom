<?php 
require_once __DIR__.'/../../../config.php';


    if(isset($_POST['submit'])){
        $name = $_POST['category_name'];
        $slug = $_POST['category_slug'];
        // $image = $_POST['image'];

        $sql = "INSERT INTO product_categories (category_name, category_slug)
        VALUES ('$name', '$slug')";
        $result = $connection->query($sql);

        if($result){
            echo "Category inserted successfully";
            header('location:../index.php');
        }else{
            echo "Query : $query <br><br> Error : $connection->error";
        }

    }else{
        header('location:../create.php');
    }
