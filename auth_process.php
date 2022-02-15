<?php
    session_start();
    require_once "config.php";

    if(isset($_POST['register'])){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $password = htmlspecialchars($_POST['password']);

        
        $check_sql = "SELECT email FROM users WHERE email='$email'";
        $check_result = $connection->query($check_sql);
        foreach($check_result as $email){}

        if(isset($email['email'])){
            // email already exists
            $email = $email['email'];
            $_SESSION['msg'] = " $email is already registered";
            header('location: register.php');
        }else{
            $sql = "INSERT INTO users (name, phone, email, password)
            VALUES ('$name', '$phone', '$email', '$password')";
            $result = $connection->query($sql);
    
            if($result){
                $_SESSION['msg'] =  "Account created successfully, please login to your account";
                header('location: login.php');
            }else{
                $_SESSION['msg'] =  "Register failed";
                header('location: register.php');
            }
        }
    }



    // user login

    if(isset($_POST['login'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

                
        $check_sql = "SELECT * FROM users WHERE email='$email' AND password='$password' limit 1";
        $check_result = $connection->query($check_sql);
        foreach($check_result as $user){}

        if(isset($user)){
           $_SESSION['user_id'] = $user['user_id'];
           $_SESSION['role'] = $user['role'];
        
        //    message
        $_SESSION['msg'] =  "Logged in successfully";

        if(isset($_SESSION['redirect_url'])){
            $redirect_url = $_SESSION['redirect_url'];
            unset($_SESSION['redirect_url']);
            header("location: $redirect_url");
        }else{
            header('location: index.php');
        }

        }else{
            $_SESSION['msg'] =  "Your email & password doesn't match";
            header('location: login.php');
        }
        

    }