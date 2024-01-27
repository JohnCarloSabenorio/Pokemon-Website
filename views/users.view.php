<?php 
    function displayUsers($users){
        // Displays text to text history  or audio2text
        while($user = mysqli_fetch_assoc($users)){
            echo   
            "<tr id = '". $user['user_id'] . "'>" .            
            "<td>" . $user['user_id']. "</td>" .
            "<td>" . $user['fname']. "</td>" .
            "<td>" . $user['lname']. "</td>" .
            "<td>" . $user['email']. "</td>" .
            "<td>" . $user['registration_date']. "</td>" .
            "<td>" . $user['user_level'] . "</td>" .
            "<td><button type = 'button' class = 'table-btn update-user'>Update</button></td>" .
            "<td><button type = 'button' class = 'table-btn delete-user'>Delete</button></td>" .
            "</tr>";
        }
    }
?>
<?php require("partials/thehead.php")?>
<link rel = "stylesheet" href = "css/user-table.css">
    <style>
        body{
            background: none;
        }
    </style>
    <?php require("partials/admin-nav.php")?>


<!-- Confirm delete window -->
<div class = "delete-window">
    <div class = "confirm-div">
        <h4 class = "confirm-text"></h4>
        <div class = "confirm-btn-div">
            <button class = "confirm-btn confirm-yes">Yes</button>
            <button class = "confirm-btn confirm-no">No</button>
        </div>
    </div>
</div>

<!-- Create window -->
<div class = "create-window">
    <div class = "create-form-div">
        <button type = "button" class = "close-btn closecreate-btn">X</button>
        <h4 class = "create-div-header">Create A New User</h4>
        <form id = "form">
            <div class = "input-div">
                <label for = "fname">First Name</label>
                <input type="text" placeholder="Name" class = "admin-input" id="fname" name="fname" required minlength = "1" maxlength="30" required>
                <label for = "lname">Last Name</label>
                <input type="text" placeholder="Name" class = "admin-input" id="lname" name="lname" required minlength = "1" maxlength="30" required>
                <div><label for = "email">Email</label></div>
                <input type="email" placeholder="Email" id="email" class = "admin-input" name="email" required maxlength="100" required>
                <div><label for = "pword">Password</label></div>
                <input type="password" placeholder="Password" class = "admin-input" id="pword" name="pword" required>
                <div><label for = "pword2">Confirm Password</label></div>
                <input type="password" placeholder="Confirm Password" class = "admin-input" id="pword2" name="pword2" required>
                <span for = "userType" class = "typeLabel">Type of user</span>
                <select name="userType" id="userType" class="form-control select-type">
                    <option value="default">Type of User …</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>

            <hr>
            <div class = "acc-req">
                <p class = "req user-fname1">*First Name must be 1-30 characters long and must not contain special characters</p>
                <p class = "req user-lname1">*Last Name must be 1-30 characters long and must not contain special characters</p>
                <p class = "req valid-email1">*Email must be unique and valid</p>
                <p class = "req confirm-pass1">*Passwords must match and atleast 8 characters long</p>
            </div>
            <input type="submit" class= "admin-submit" id="create-user" name="submit-register" value="Create User" disabled>
        </form>
    </div>
</div>

<!-- Update window -->
<div class = "update-window">
    <div class = "update-form-div">
        <button type = "button" class = "close-btn closeupdate-btn">X</button>
        <h4 class = "update-div-header">Update this user</h4>
        <form id = "update-form">
            <div class = "input-div">
                <label for = "new-fname">First Name</label>
                <input type="text" placeholder="Name" class = "admin-input" id="new-fname" name="new-fname" required minlength = "1" maxlength="30" required>
                <label for = "new-lname">Last Name</label>
                <input type="text" placeholder="Name" class = "admin-input" id="new-lname" name="new-lname" required minlength = "1" maxlength="30" required>
                <label for = "email">Email</label>
                <input type="email" placeholder="Email" class = "admin-input" id="new-email" name="new-email" required maxlength="100" required>
                <label for = "pword">Password</label>
                <input type="password" placeholder="Password" class = "admin-input" id="new-pword" name="new-pword" required>
                <label for = "pword2">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class = "admin-input" id="new-pword2" name="new-pword2" required>
            </div>
            <hr>
            <div class = "acc-req">
                <p class = "req user-fname2">*First Name must be 1-30 characters long and must not contain special characters</p>
                <p class = "req user-lname2">*Last Name must be 1-30 characters long and must not contain special characters</p>
                <p class = "req valid-email2">*Email must be unique and valid</p>
                <p class = "req confirm-pass2">*Passwords must match and atleast 8 characters long</p>
            </div>
            <input type="submit" class= "admin-submit" id="submitUpdate" name="submitUpdate" value="Update User" disabled>
        </form>
    </div>
</div>



<!-- Stores current user id in hidden content -->
<input type="hidden" id="<?= $_SESSION['user_id']?>" class="mysession">

<body id = <?= $sess_id ?>>

    <div class = "table-container">
            <table class = "users-table">
                    <tr>
                        <td class = "create-cell" colspan = 2><button class = "table-btn create-btn">Create User</button></td>
                    </tr>
                    <tr>
                        <th class = "data">User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>User Level</th>
                        <th colspan = 3>Actions</th>   
                    </tr>
                    <?php displayUsers($users)?>
            </table>
    </div>

</body>
    <script src ="js/user-table.js"></script>

    <?php require "partials/footer.php"?>



