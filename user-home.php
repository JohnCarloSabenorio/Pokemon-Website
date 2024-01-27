<?php
session_start();
require_once('mysqli_connect.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST" && ISSET($_POST['logout'])){
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    
    header("location: " . 'login.php');

}
require("views/user-home.view.php");