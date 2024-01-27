<?php require("partials/thehead.php")?>
    <?php require("partials/nav.php")?>

    <form action = "user-changepass.php" autocomplete="false" method = "POST" class = "my-4">
        <div class = "container-fluid d-flex flex-column userpass-div" style = "background: white; width: 600px; border-radius: 5px"> 
            <div class = "row pt-5">
                <div class = "col-12 mx-auto text-center">
                    <h1 class = "mb-3">Change your password</h1>
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "oldpsword"><p class = "label-content">Current Password</p></label>
                        <input type = "password" id = "oldpsword" name = "oldpsword" class = "form-control">
                        <i class = "text-danger"><?= $errors['oldpsword'] ?? '' ?></i> 
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                        <label class = "form-label" for = "newpsword"><p class = "label-content">New Password</p></label>
                        <input type = "password" id = "newpsword" name = "newpsword" minlength="8" class = "form-control" placeholder = "Minimum length of 8 characters">
                        <i class = "text-danger"><?= $errors['newpsword'] ?? '' ?></i> 
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto">
                    <label class = "form-label" for = "newpsword1"><p class = "label-content">Confirm&nbsp;Password</p></label>
                    <input type = "password" id = "newpsword1" name = "newpsword1" class = "form-control" placeholder = "Re-enter your password here">
                    <i class = "text-danger"><?= $errors['newpsword1'] ?? '' ?></i> 
                </div>
            </div>

            <div class = "row">
                <div class = "col-10 mx-auto my-4 mb-2">
                    <button type="submit" class="btn submit-btn" style = "color: white; background: #fe4c5a;margin-bottom: 1em">Submit</button>
                </div>
            </div>
        </div>
    </form>





    <?php require "partials/footer.php"?>


