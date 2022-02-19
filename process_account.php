<?php  
session_start();
require_once "config.php";
require_once "user_auth.php";
$user_id = $_SESSION['user_id'];


if(isset($_POST['edit_account'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $updateUserSql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE user_id = '$user_id'";
    $updateResult = $connection->query($updateUserSql);
    if($updateResult){
        $_SESSION['msg'] = "account info updated";
        header('location: edit_account.php');
    }else{
        $_SESSION['msg'] = "Fails to update account info!";
        header('location: edit_account.php');
    }
}