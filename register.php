<?php

session_start();
require_once('mysqli_connect.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    if(strlen($_POST['fname']) === 0){
        $errors['fname'] = '*Your first name is required.';
    }
    if(strlen($_POST['lname']) === 0){
        $errors['lname'] = '*Your last name is required.';
    }    
    if(strlen($_POST['email'] === 0 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
        $errors['email'] = '*A valid email is required.';
    }
    if(strlen($_POST['psword']) === 0){
        $errors['psword'] = '*A password is required.';
    }  
    
    if(strlen($_POST['psword2']) === 0 && strlen($_POST['psword']) != 0){
        $errors['psword'] = '*Please re-enter your password.';
    } 

    elseif($_POST['psword'] != $_POST['psword2']){
        $errors['psword'] = '*Your passwords do not match. Please try again.';
    }    

    $fname = mysqli_real_escape_string($con, trim($_POST['fname']));
    $lname = mysqli_real_escape_string($con, trim($_POST['lname']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $hash = mysqli_real_escape_string($con, md5(trim($_POST['psword'])));
    
    if(empty($errors)){
        try{
            mysqli_query($con, "INSERT INTO users (fname, lname, email, psword, registration_date) 
            VALUES ('$fname', '$lname', '$email', '$hash', NOW())");
            header("Location: register-thanks.php", true, 301);
            exit();
        }
        catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }
}
}

if($_SESSION['user_id'] ?? false){
    $url = ($_SESSION['user_level'] === 1) ? "admin-home.php" : "user-home.php";
    header("location: ". $url);
}

require("views/register.view.php");
