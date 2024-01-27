<?php
session_start();
require_once('mysqli_connect.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

if($_SESSION['user_level'] == 0){
	header("location: " . 'user-home.php');
}



if($_SERVER["REQUEST_METHOD"] === "POST"){
    $errors = [];


    $oldpsword = mysqli_real_escape_string($con, md5(trim($_POST['oldpsword'])));
    $newpsword = mysqli_real_escape_string($con, md5(trim($_POST['newpsword'])));
    $newpsword1 = mysqli_real_escape_string($con, md5(trim($_POST['newpsword1'])));

    $sess_id = $_SESSION['user_id'];
    $q = "SELECT psword FROM users WHERE (user_id = '$sess_id')";
    $result = mysqli_query($con, $q);
    $verifypass = mysqli_fetch_array($result, MYSQLI_ASSOC)['psword'];

    if(strlen($_POST['oldpsword']) === 0){
        $errors['oldpsword'] = 'Please enter your current password.';
    }
    elseif($oldpsword != $verifypass){
        $errors['oldpsword'] = '*Your password is inccorect.';
    }
    

    if(strlen($_POST['newpsword']) === 0){
        $errors['newpsword'] = '*Please enter your new password.';
    }
    
    if($newpsword != $newpsword1){
        $errors['newpsword'] = 'Your new passwords do not match. Please try again.';
    }
    elseif(strlen($_POST['newpsword']) != 0 && strlen($_POST['newpsword1']) === 0){
        $errors['newpsword'] = '*Please confirm your password.';
    }

    if(empty($errors)){
        try{
            $updatequery = "UPDATE users
                        SET psword = '$newpsword'
                        WHERE user_id = '$sess_id'";
            
            mysqli_query($con, $updatequery);
            $_SESSION['changepass'] = "You have successfully changed your password!";
            header('location: admin-home.php');
        }
        catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }
    }


}

require("views/admin-changepass.view.php");