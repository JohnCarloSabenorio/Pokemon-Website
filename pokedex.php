<?php

session_start();

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}
require("views/pokedex.view.php");
