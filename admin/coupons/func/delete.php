<?php 
require_once __DIR__.'/../../../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM cupon_code WHERE coupon_id ='$id'";
    $delete = $connection->query($sql);
    if($delete){
        return header('location: ../index.php');
    }
}else{
    return header('location: ../index.php');
}