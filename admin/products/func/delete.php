<?php  
    require_once __DIR__.'/../../../config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM products WHERE product_id='$id'";
        if($connection->query($sql)==true){
            return header('location: ../index.php');
        }else{
            echo "Opps, faild to delete the data";
        }
    }else{
        echo "You must have a id ";
    }