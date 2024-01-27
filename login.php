<?php
require_once('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        session_start();
        $errors = [];
     
        if(strlen($_POST['login-email'] === 0 || !filter_var($_POST['login-email'], FILTER_VALIDATE_EMAIL))){
            $errors['login-error'] = '*Invalid email or password.';
        }
        if(strlen($_POST['login-psword']) === 0){
            $errors['login-error'] = '*Invalid email or password.';
        }  
          
        $email = mysqli_real_escape_string($con, trim($_POST['login-email']));
        $pass = mysqli_real_escape_string($con, md5(trim($_POST['login-psword'])));

        if(empty($errors)){
            try{
                $q = "SELECT"."*"."FROM users WHERE (email = '". $email ."')";
                $result = @mysqli_query($con, $q);
                if ($email && $pass) {
                    $q = "SELECT user_id, fname, user_level FROM users WHERE (email = '". $email ."' AND psword = '". $pass . "')";
                    $result = @mysqli_query($con, $q);
            
                    if (@mysqli_num_rows($result) == 1) {
                        $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $_SESSION['user_level'] = (int) $_SESSION['user_level']; 
                        echo "<script>alert('".$_SESSION['user_level']."');</script>";
                        $url = ($_SESSION['user_level'] === 1) ? "admin-home.php" : "user-home.php";
                        
                        header("location: " . $url);
                        exit();
                        mysqli_free_result($result);
                        mysqli_close($con);
                    } 
                    else {
                        $errors['login-error'] = "*Incorrect email or password.";
                    }
                }
            }
            catch (mysqli_sql_exception $e) { 
                var_dump($e);
                exit; 
            }       

                // mysqli_query($con, "INSERT INTO users (fname, lname, email, psword, registration_date) 
                // VALUES ('$fname', '$lname', '$email', '$hash', NOW())");
                // header("Location: register-thanks.php", true, 301);
                // exit();
        }
    }

if($_SESSION['user_id'] ?? false){
    $url = ($_SESSION['user_level'] === 1) ? "admin-home.php" : "user-home.php";
    header("location: ". $url);
}

require("views/login.view.php");
