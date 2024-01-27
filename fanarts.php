<?php
session_start();

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

require("mysqli_connect.php");
if(!empty($_FILES) && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $file_name =  $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "images/fanarts/". $_FILES['file']['name']);
    $author_id = $_SESSION["user_id"];
    $date = "NOW()";
    $author_name = $_SESSION["fname"];

    $stmt = $con->prepare("INSERT INTO fanarts (author_id, file_name, author_name, upload_date) VALUES (?,?,?, NOW())");
    $stmt->bind_param( "iss",$author_id, $file_name, $author_name); 
    $stmt->execute();
}

$art_query = mysqli_query($con,"SELECT file_name, author_name, upload_date FROM fanarts");
require("views/fanarts.view.php");
