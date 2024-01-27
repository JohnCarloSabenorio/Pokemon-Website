<?php
session_start();
require_once('mysqli_connect.php');
$query = "select * from users";
$result = mysqli_query($con, $query);
$sess_id = $_SESSION['user_id'];

if(! ISSET($_SESSION['fname'])){
    header("location: " . 'login.php');
}

if($_SESSION['user_level'] === 0){
    header("location: " . 'user-home.php');
}

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
    $q = "SELECT fname, email FROM users";
    $result = mysqli_query($con, $q);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    exit(json_encode($users));
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userType'])) {
    // 1 get all the values input first and protection from sql injection, then
    // 2 get username and email from database, to avoid same data
    // 3 before validating it if its empty or user/email already taken or password matched

    // 1
    $fname = mysqli_real_escape_string($con, trim($_POST['fname']));
    $lname = mysqli_real_escape_string($con, trim($_POST['lname']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $usertype = (int)mysqli_real_escape_string($con, trim($_POST['userType']));
    $hashedPass = mysqli_real_escape_string($con, md5(trim($_POST['pword'])));
    // // 2
    // $usernameCheck = "SELECT * FROM `users` WHERE username = '" . $username . "' ";
    // $usernameResult = mysqli_query($con, $usernameCheck);
    // $emailCheck = "SELECT * FROM `users` WHERE email = '" . $email . "' ";
    // $emailResult = mysqli_query($con, $emailCheck);


    $query = mysqli_prepare($con, "INSERT INTO users(fname, lname, email, psword, user_level, registration_date) 
                                    VALUES (?, ?, ?, ?, ?, NOW())");

    mysqli_stmt_bind_param($query, "ssssi", $fname, $lname, $email, $hashedPass, $usertype);
    $result = mysqli_stmt_execute($query);
    

    $q = "SELECT user_id, fname, lname, email, registration_date, user_level FROM users ORDER BY user_id ASC";
    $users = mysqli_query($con, $q);
    $result = mysqli_fetch_all($users, MYSQLI_ASSOC);
    exit(json_encode($result));
}

else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new-fname'])) {
    // 1 get all the values input first and protection from sql injection, then
    // 2 get username and email from database, to avoid same data
    // 3 before validating it if its empty or user/email already taken or password matched

    // 1
    $fname = mysqli_real_escape_string($con, trim($_POST['new-fname']));
    $lname = mysqli_real_escape_string($con, trim($_POST['new-lname']));
    $email = mysqli_real_escape_string($con, trim($_POST['new-email']));
    $userId = (int)$_POST['userId'];
    $hashedPass = mysqli_real_escape_string($con, md5(trim($_POST['new-pword'])));

    if($userId == $_SESSION['user_id']){
        $_SESSION['fname'] = $fname;
        $sess_id = "$userId";
    }

    // // 2
    // $usernameCheck = "SELECT * FROM `users` WHERE username = '" . $username . "' ";
    // $usernameResult = mysqli_query($con, $usernameCheck);
    // $emailCheck = "SELECT * FROM `users` WHERE email = '" . $email . "' ";
    // $emailResult = mysqli_query($con, $emailCheck);

    $query = mysqli_prepare($con, "UPDATE users SET fname = ?, lname = ?, email = ?, psword = ?
    WHERE user_id = ?");
    mysqli_stmt_bind_param($query, "ssssi", $fname, $lname, $email, $hashedPass, $userId);
    $result = mysqli_stmt_execute($query);
    
    $q = "SELECT user_id, fname, lname, email, registration_date, user_level FROM users ORDER BY user_id ASC";
    $users = mysqli_query($con, $q);
    $result = mysqli_fetch_all($users, MYSQLI_ASSOC);
    exit(json_encode($result));
}




$q = "SELECT user_id, fname, lname, email, registration_date, user_level FROM users ORDER BY user_id ASC";
$users = mysqli_query($con, $q);



require("views/users.view.php");