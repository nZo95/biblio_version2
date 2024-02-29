<!DOCTYPE html>
<html lang="fr">
<?php require 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre - ASF</title>
    <link rel="stylesheet" href="member_area/styles/member.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    
</head>
<body>
    <section>

        <div class="space">
            <h1>Bienvenue sur votre espace membre</h1>
            <img class="sizeimg" src="member_area/img/compte.png" alt="">
            
        </div>

        <div class="space">
            <h1>Favoris</h1>
            <div class="container">
                <div class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
                    <div class="image-list">
                        <img src="images/9780090898305.jpg" alt="" class="image-item">
                        <img src="images/9780151001637.jpg" alt="" class="image-item">
                        <img src="images/9780307792365.jpg" alt="" class="image-item">
                        <img src="images/9780613135818.jpg" alt="" class="image-item">
                        <img src="images/9782253087830.jpg" alt="" class="image-item">
                    </div>
                    <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
                </div>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>

        <div class="space">
            <h1>Paramètre</h1>
        </div>

    </section>
</body>
<?php require 'footer.php'?>
</html>