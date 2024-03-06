<!DOCTYPE html>
<html lang="fr">
<?php require('header.php'); ?>
<head>
    <link type="text/css" rel="stylesheet" href="styles/books.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
  </head>
  <body>
    <main>
      <div class="space"></div>
      <div class="container-slider-wrapper">
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
          <div class="image-list">
            <div class="image-item"><a href="detail.php"><img src="images/9782253087830.jpg" alt=""></a></div>
          </div>
          <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
        </div>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
      <div class="space"><hr></div>
      <h2>Entrez dans le monde merveilleux de la lecture, une aventure rempli de mystère...</h2>
      <h2>Découvrir par <em>Genre</em></h2>
      <h3>Fantastique</h3>
      <div class="space"></div>
      <div class="container-books">
        <div class="grid">
          <div class="image-item"><a href="detail.php"><img src="images/9782253087830.jpg" alt=""></a></div>
        </div>
      </div>
      <div class="space"></div>
      <?php require('footer.php'); ?>
</body>
</html>