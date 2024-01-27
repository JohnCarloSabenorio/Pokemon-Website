<?php
session_start();

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

require("views/games.view.php");
