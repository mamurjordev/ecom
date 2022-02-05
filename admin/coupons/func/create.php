<?php  
require_once __DIR__.'/../../../config.php';

if(isset($_POST['submit'])){
    $code = $_POST['cupon_code'];
    $percent = $_POST['percent'];
    $ammount = $_POST['ammount'];
    $type = $_POST['type'];

    $sql = "INSERT INTO cupon_code(percent,ammount,cupon_code,select_type) VALUES( '$percent', '$ammount', '$code', '$type')";

    $query = $connection->query($sql);
    if($query){
        return header('location: ../index.php');
    }

}else{
    return header('location: ../create.php');
}