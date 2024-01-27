<nav class="navbar navbar-expand-lg bg-body-tertiary" style = "padding: 0; margin-bottom: 5px; border-bottom: 2px solid black;">
    <div class="container-fluid navcontainer" style = "background: #7a86b8;">
        <a class="navbar-brand text-warning" href="#"> <img src="images/admin-logo.png" alt="Bootstrap" width="70" height="50"></a>
        <a class="navbar-brand text-white">JC Administration</a>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="#" id = "user-welcome">Welcome, <?= $_SESSION["fname"]?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin-home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="users.php">View Users</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="user-home.php">View Site</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin-changepass.php">Change Password</a>
                </li>
                <li class="nav-item">
                <form action = "admin-home.php" METHOD = "POST">
                    <input type = "submit" class="nav-link text-white" name = "logout" value = "Logout" href="#">
                </form>
                </li>
            </ul>
        </div>
    </div>
    </nav>