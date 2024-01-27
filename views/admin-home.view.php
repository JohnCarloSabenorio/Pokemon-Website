<?php require("partials/thehead.php")?>
    <style>
        body{
            background: none;
        }
    </style>
    <?php require("partials/admin-nav.php")?>
    <?php if(ISSET($_SESSION['changepass'])) : ?>
        <h3 class = "changed-pass my-0" style = "background: #90ee90;"><?php
            echo $_SESSION['changepass'];
            unset($_SESSION['changepass']);
            ?>
        </h3>
        
    <?php endif ?>
    <h1 class = "my-4 mx-3" style = "color: black;">Site Administration</h1>
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-7">
                    <div class = "container-fluid" style = "background: #f8f8f8;">
                        <div class = "row">
                            <h3 style = "background: black; color: white">Authentication and Authorization</h3>
                        </div>
                        <div class = "row">
                            <div class = "col-8"><b><p>Groups</p></b></div>
                            <div class = "col"><a href = "#"><p>+ Add</p></a></div>
                            <div class = "col"><a href = "#"><p>/ Change</p></a></div>
                        </div>
                        <div class = "row">
                            <hr>
                        </div>
                        <div class = "row">
                            <div class = "col-8"><b><p>Users</p></b></div>
                            <div class = "col"><a href = "#"><p>+ Add</p></a></div>
                            <div class = "col"><a href = "#"><p>/ Change</p></a></div>
                        </div>
                    </div>
                </div>
                <div class = "col-5" style = "background: #f8f8f8;">
                    <div class = "container-fluid">
                        <div class = "row">
                            <h3 class = "mt-3">Admin Activities</h3>
                        </div>
                        <div class = "row">
                            <hr>
                        </div>
                        <div class = "row">
                            <div class = "row"><b><p>Added a user.</p></b></div>
                            <div class = "row"><b><p>Changed user level for user "john carlo."</p></b></div>
                            <div class = "row"><b><p>Authors</p></b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class = "col-7">
                    <div class = "container-fluid" style = "background: #f8f8f8;">
                        <div class = "row">
                            <h3 style = "background: black; color: white">Catalog</h3>
                        </div>
                        <div class = "row">
                            <div class = "col-8"><b><p>Authors</p></b></div>
                            <div class = "col"><a href = "#"><p>+ Add</p></a></div>
                            <div class = "col"><a href = "#"><p>/ Change</p></a></div>
                        </div>

                        <div class = "row">
                            <hr>
                        </div>

                        <div class = "row">
                            <div class = "col-8"><b><p>Games</p></b></div>
                            <div class = "col"><a href = "#"><p>+ Add</p></a></div>
                            <div class = "col"><a href = "#"><p>/ Change</p></a></div>
                        </div>

                        <div class = "row">
                            <hr>
                        </div>

                        <div class = "row">
                            <div class = "col-8"><b><p>Generations</p></b></div>
                            <div class = "col"><a href = "#"><p>+ Add</p></a></div>
                            <div class = "col"><a href = "#"><p>/ Change</p></a></div>
                        </div>
                    </div>
                </div>

                <div class = "col-5" style = "background: #f8f8f8;">
                    <div class = "container-fluid">
                        <div class = "row">
                            <h3>User Activities</h3>
                        </div>
                        <div class = "row">
                            <hr>
                        </div>
                        <div class = "row">
                            <div class = "row"><b><p>User 1 Posted in forum.</p></b></div>
                            <div class = "row"><b><p>User 1 Changed his password.</p></b></div>
                            <div class = "row"><b><p>User 2 Visited the pokedex.</p></b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script>

    </script>


    <?php require "partials/footer.php"?>


