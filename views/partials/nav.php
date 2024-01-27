<nav class="navbar navbar-expand-lg bg-body-tertiary" style = "padding: 0; margin-bottom: 5px; border-bottom: 2px solid black;">
    <div class="container-fluid navcontainer">
        <a class="navbar-brand text-warning" href="#"> <img src="images/logo.png" alt="Bootstrap" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="user-home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pokedex.php">Pokedex</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="games.php">Games</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['fname'] ?? 'User'?>
                </a>
                <ul class="dropdown-menu" style = "background: #CC0000;">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <?= $_SESSION['user_level'] === 1 ? '<li><a class="dropdown-item" href="admin-home.php">Admin</a></li>' : '' ?>
                    

                    <li><a class="dropdown-item" href="user-changepass.php">Change Password</a></li>
                    <form action = "admin-home.php" METHOD = "POST">
                    <li>
                    <a class="dropdown-item" href="#"><input type = "submit" class="nav-link text-black p-0" name = "logout" value = "Logout" href="#"></a>
                    </li>
                  </form>
                </ul>
            </li>
        </ul>
        
        
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            
            <button class="btn" style = "background: black; color: white;" type="submit">Search</button>
        </form>
        
        </div>
    </div>
    </nav>