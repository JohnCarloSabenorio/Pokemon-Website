<?php require("partials/thehead.php")?>
    
    <form action = "register.php" autocomplete="false" method = "post" class = "my-4">
        <div class = "container-fluid d-flex flex-column" style = "background: white; width: 600px; border-radius: 5px"> 
            <div class = "row pt-5">
                <div class = "col-12 mx-auto text-center">
                    <h1 class = "mb-3">Create An Account</h1>
                </div>
            </div>
            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "fname"><p class = "label-content">First Name</p> <i class = "error-message text-danger"><?= $errors['fname'] ?? '' ?></i></label>
                        <input type = "text" id = "fname " name = "fname" placeholder = "John" class = "form-control" value = <?= $_POST['fname'] ?? ''?>>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "lname"><p class = "label-content">Last Name</p> <i class = "error-message text-danger"><?= $errors['lname'] ?? '' ?></i></label>
                        <input type = "text" id = "lname " name = "lname" placeholder = "Doe" class = "form-control" value = <?= $_POST['lname'] ?? ''?>>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "email"><p class = "label-content">Email</p> <i class = "error-message text-danger"><?= $errors['email'] ?? '' ?></i></label>
                        <input type = "email" id = "email " name = "email" placeholder = "user@host.domain" class = "form-control" value = <?= $_POST['email'] ?? ''?>>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "psword"><p class = "label-content">Password</p></label>
                        <input type = "password" id = "psword" name = "psword" minlength="8" class = "form-control" placeholder = "Minimum length of 8 characters">
                        <i class = "text-danger"><?= $errors['psword'] ?? '' ?></i> 
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                    <label class = "form-label" for = "psword2"><p class = "label-content">Confirm&nbsp;Password</p></label>
                    <input type = "password" id = "psword2" name = "psword2" minlength="8" class = "form-control" placeholder = "Re-enter your password here">
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto my-4 mb-2">
                    <button type="submit" class="btn submit-btn" style = "color: white; background: #ff3838;">Submit</button>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto my-4 text-center">
                    <a href = "login.php" style = "text-decoration: none;"><p>Already have an account?</p></a>
                </div>
            </div>
        </div>
    </form>
<?php require "partials/footer.php"?>
