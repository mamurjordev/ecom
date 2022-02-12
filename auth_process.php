<?php  
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
            header('location: register.php');
        }else{
            $sql = "INSERT INTO users (name, phone, email, password)
            VALUES ('$name', '$phone', '$email', '$password')";
            $result = $connection->query($sql);
    
            if($result){
                echo "Category inserted successfully";
                header('location: login.php');
            }else{
                echo "Query : $query <br><br> Error : $connection->error";
            }
        }
    }