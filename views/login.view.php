<?php require("partials/thehead.php")?>
    
    <form action = "login.php" autocomplete="false" method = "post" class = "my-4">
        <div class = "container-fluid d-flex flex-column" style = "background: white; width: 600px; border-radius: 5px"> 
            <div class = "row py-5">
                <div class = "col-12 mx-auto text-center">
                    <h1 class = "mb-3">Login to your account!</h1>
                </div>
            </div>

            <div class = "row text-center">
                <i class = "error-message text-danger"><?= $errors['login-error'] ?? '' ?></i>
            </div>
            <div class = "row">
                <div class = "col-10 mx-auto py-0">
                        <label class = "form-label" for = "login-email"><p class = "label-content">Email</p></label>
                        <input type = "text" id = "login-email " name = "login-email" class = "form-control" value = <?= $_POST['login-email'] ?? ''?>>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto py-0">
                        <label class = "form-label" for = "login-psword"><p class = "label-content">Password</p></label>
                        <input type = "password" id = "login-psword" name = "login-psword" class = "form-control">
                        <i class = "text-danger"></i> 
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto py-4 pb-2">
                    <button type="submit" id= "submit-btn" class="btn submit-btn" style = "color: white; background: #ff3838;">Login</button>
                </div>
            </div>
            <div class = "row">
                <div class = "col-10 mx-auto">
                    <hr>
                </div>
            </div>
            <div class = "row">
                <div class = "col-10 mx-auto pt-2 pb-5">
                    <a href = "register.php" class="btn register-btn" role= "button" style = "color: white; background: blue;">Register</a>
                </div>
            </div>
    </form>
<?php require "partials/footer.php"?>
