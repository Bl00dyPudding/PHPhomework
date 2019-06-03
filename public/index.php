<?php require_once('../config/config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="preloader">
        <div id="load">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
    </section>
    <main class="gallery">
        <?php
            echo renderImages(IMG_DIR);
        ?>
    </main>
    <div id="modal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img src="" class="modal-content" alt="" id="bigImg">
        <p id="viewsCounter"></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>