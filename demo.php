<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType2']) == 'login') {
    // variable that will handle the errors and hold error messages
    //$errors = array();

    // validate EMAIL ADDRESS
    if (!empty($_POST['loginUser'])) {
        $e = mysqli_real_escape_string($, trim($_POST['loginUser']));
    } else {
        $e = FALSE;
        echo "<script>alert('enter email');</script>";
        //$errors[] = "Email Address";
    }

    if (!empty($_POST['loginPassword'])) {
        $p = mysqli_real_escape_string($, trim($_POST['loginPassword']));
    } else {
        $p = FALSE;
        echo "<script>alert('enter password');</script>";
        //$errors[] = "Password";
    }

    if ($e && $p) {
        $q = "SELECT user_id, fname, user_level FROM users WHERE (email = '". $e ."' AND psword = '". md5($p) . "')";
        $result = @mysqli_query($, $q);

        // count the number of rows that has the same email and password
        if (@mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // check user level
            $_SESSION['user_level'] = (int) $_SESSION['user_level']; // convert string to integer
            // everything u get in database is a string
            echo "<script>alert('".$_SESSION['user_level']."');</script>";
            // ternary operators
            //$url = ($_SESSION['user-level'] === 1) ? "admin-home.php" : "user-home.php";
            $url = ($_SESSION['user_level'] === 1) ? "register-view-users.php" : "ecofriendly.php";

            header("location: " . $url);
            exit();
            mysqli_free_result($result);
            mysqli_close($);
        } else {
            echo "Error.";
        }
    } else {
        echo "Please try again.";
    }

    mysqli_close($con);
}