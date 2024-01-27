<?php require("partials/thehead.php")?>
    <style>
        body{
            background: none;
        }
    </style>


    <?php require("partials/admin-nav.php")?>

        <h1 class = "my-4 text-center" style = "color: black;">EDIT USER</h1>
        <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = [];
    
        if(empty($_POST['fname'])){
            $errors[] = "You forgot to enter your first name";
        }
        else{
            $fn  = mysqli_real_escape_string($con, trim($_POST['fname'])); 
        }
        if(empty($_POST['lname'])){
            $errors[] = "You forgot to enter your last name";
        }
        else{
            $ln  = mysqli_real_escape_string($con, trim($_POST['lname'])); 
        }
        if(empty($_POST['email'])){
            $errors[] = "You forgot to enter your email";
        }
        else{ 
            $email  = mysqli_real_escape_string($con, trim($_POST['email'])); 
        }
    
        if(empty($_errors)){
            $q = "SELECT user_id FROM users WHERE email = '$email'";
            $result = @mysqli_query($con, $q);
            if(mysqli_affected_rows($con) < 1){
                $q = "UPDATE users SET fname = '$fn', lname = '$ln', email = '$email' WHERE user_id = '$id'";
                $result = @mysqli_query($con, $q);
                if($result){
                    $success = "Admin edited user no. $id";
                }
                else{
                    echo "Error: No edit has been made";
                }
            }
            else{
                echo "Email already registered!";
            }
    
        }
        else{
            foreach($errors as $msg){
                " - $msg<br>\n";
            }
        }
    } 
    ?>    
        <div class = "edit-container">
            <form action = "edit-user.php?id=<?=$id?>" method = "POST">
                <table class = "edit-user-container">
                    <tr>
                        <td><label for = "edit-fname">First Name</label></td>
                        <td><input class = "edit-fname" type = "text" name = "fname"></td>
                    </tr>
                    <tr>
                        <td><label for = "edit-lname">Last Name</label></td>
                        <td><input class = "edit-lname" type = "text" name = "lname"></td>
                    </tr>
                    <tr>
                        <td><label for = "edit-email">Email</label></td>
                        <td><input class = "edit-email" type = "email" name = "email"></td>
                    </tr>
                    <tr>
                        <td><label for = "edit-psword">Password</label></td>
                        <td><input class = "edit-psword" type = "password" name = "password"></td>
                    </tr>
                    <tr>
                        <td><label for = "confirm-psword">Confirm Password</label></td>
                        <td><input class = "confirm-psword" type = "password" name = "password2"></td>
                    </tr>
                    <tr><td colspan = 2><input type = "submit" class = "edit-btn" value = "Edit User"></td></tr>
                <table>

            </form> 


        </div>
    <?php require "partials/footer.php"?>



