<?php  
require_once __DIR__.'/../../../config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = $_GET['id'];
    
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', password='$password', role='$role' WHERE user_id='$id'";

    $query = $connection->query($sql);
    if($query){
        return header('location: ../index.php');
    }

}else{
    return header('location: ../create.php');
}