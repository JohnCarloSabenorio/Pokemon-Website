<?php
 require("mysqli_connect.php"); 

//Delete records of a user from all tables in the database
    $q = "SET foreign_key_checks = 0;";
    mysqli_query($con, $q);

    $q = "DELETE FROM users WHERE user_id = ". $_POST['userId'] . ";";
    mysqli_query($con, $q);

    $q = "SET foreign_key_checks = 1;";
    mysqli_query($con, $q);

    $q = "SELECT user_id, fname, lname, email, registration_date, user_level FROM users ORDER BY user_id ASC";
    $users = mysqli_query($con, $q);
    $result = mysqli_fetch_all($users, MYSQLI_ASSOC);
    exit(json_encode($result));


