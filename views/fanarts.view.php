<?php require("partials/thehead.php")?>
<?php require("partials/nav.php")?>

    <div class = "container w-100 my-3" style = "border-radius: 5px;padding : 50px; font-size: 1.2rem; background: white;">
        <form method = "POST" action = "fanarts.php" enctype="multipart/form-data" class = "art-form">
                <input type = "file" class = "input-file" name = "file">
                <input type = "submit" class = "upload-btn" value = "upload"> 
        </form>
        <div class = "art-container">
            <?php while($row = mysqli_fetch_assoc($art_query)) : ?>
                <div class = "art-card" style = "background-image:url(images/fanarts/<?= $row["file_name"] ?>)"></div>
            <?php endwhile ?>
        </div>
    </div>

    <?php require "partials/footer.php"?>


