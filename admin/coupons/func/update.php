<?php  
require_once __DIR__.'/../../../config.php';

if(isset($_POST['submit'])){
    $code = $_POST['cupon_code'];
    $percent = $_POST['percent'];
    $ammount = $_POST['ammount'];
    $type = $_POST['type'];

    $id = $_REQUEST['id'];

    
    $sql = "UPDATE cupon_code SET percent=$percent, ammount=$ammount,  cupon_code='$code',  select_type='$type' WHERE coupon_id=$id";

    $query = $connection->query($sql);
    
    if($query){
        return header('location: ../index.php');
    }

}else{
    return header('location: ../create.php');
}

