<?php
session_start();
require_once('mysqli_connect.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

if($_SESSION['user_level'] === 0){
    header("location: " . 'user-home.php');
}

if(ISSET($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
}
else if(ISSET($_POST['id']) && is_numeric($_POST['id'])){
    $id = $_POST['id'];
}

else{
    echo "This page has been accessed incorrectly";
    exit();
}



  

require("views/edit-user.view.php");