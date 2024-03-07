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
      <?php
        $query = mysqli_query($link, "SELECT * FROM genre;");
        $countQuery = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM genre;")["count(*)"]);
 
        if (!$query) { return; }

        while ($row = mysqli_fetch_array($query))
        {
          $queryBook = mysqli_query($link, "SELECT isbn FROM livre WHERE genre = " . $row["id"] . ";");
          echo '<h3>' . $row["libelle"] . '</h3>';
          echo '<div class="space"></div>';
          echo '<div class="container-books">
                <div class="grid">';
          while($rowBook = mysqli_fetch_array($queryBook))
          {
            echo '<div class="image-item"><a href="detail.php"><img src="images/' . $rowBook["isbn"] . '.jpg" alt=""></a></div>'; 
          }
          echo '</div>
                </div>';
          if ($countQuery - 1 > 0)
          {
            echo '<div class="space"><hr></div>';
            $countQuery--;
          }
        }
      ?>
      <div class="space"></div>
      <?php require('footer.php'); ?>
</body>
</html>