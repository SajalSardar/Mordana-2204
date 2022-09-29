<?php
session_start();
require_once '../db.php';
$error = [];

if(isset($_POST['submit'])){

    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $md5pass = md5($password); 

    if(empty($name)){
        $error["nameErr"] =  "Name Field is Empty!";
    }


    if(empty($email)){
        $error["emailErr"] =  "Email Field is Empty!";
    }
    if(empty($password)){
        $error["passwordErr"] =  "Password Field is Empty!";
    }

    $selectQuery = "SELECT email FROM users WHERE email = '$email' ";
    $selectResult = mysqli_query($conn, $selectQuery);
    
    if(mysqli_num_rows($selectResult) > 0){
        
        $error["emailExisted"] =  "Email Already Existed!";
        $_SESSION['error'] = $error;
        header("location:signup.php");
        exit();
    }else if(empty($error)){
        $query = "INSERT INTO users( name, email, password) VALUES ('$name', '$email', '$md5pass')";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "User Create Successfull!";
            header("location:login.php");
        }
            
        
    }else{
        $_SESSION['error'] = $error;
        header("location:signup.php");
    }

   


    

}


