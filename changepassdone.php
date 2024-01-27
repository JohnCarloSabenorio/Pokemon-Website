<?php
require_once('mysqli_connect.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

require("views/changepassdone.view.php");