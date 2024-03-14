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
              <?php
                $books = array(-1, -1, -1, -1, -1, -1, -1, -1);
                for ($i = 8; $i > 0; $i--)
                {
                  $added = false;
                  do
                  {
                    $rowBook = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM livre ORDER BY RAND() LIMIT 1;"));
                    $isOk = true;
                    for ($c = 0; $c < count($books); $c++)
                    {
                      if ($books[$c] == $rowBook) { $isOk = false; }
                    }

                    if ($isOk)
                    {
                      $books[8 - $i] = $rowBook;
                      echo '<div class="image-item"><a href="detail.php?isbn=' . $rowBook["isbn"] . '"><img src="images/' . $rowBook["isbn"] . '.jpg" alt=""></a></div>';
                      $added = true;
                    }
                  } while(!$added);
                }
              ?>
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
        
          if (!$query) { return; }
          
          $countQueryFetch = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM genre;"));
          $countQuery = intval($countQueryFetch["count(*)"]);

          if ($countQuery == 0) 
          { 
            echo '<div class="space"></div>
            <h2>Aucun Livre</h2>
            <div class="space"><hr></div>';

            return;
          }

          while ($row = mysqli_fetch_array($query))
          {
            $queryBook = mysqli_query($link, "SELECT isbn FROM livre WHERE id_genre = " . $row["id"] . ";");
            echo '<h3>' . $row["libelle"] . '</h3>';
            echo '<div class="space"></div>';
            echo '<div class="container-books">
                  <div class="grid">';
            while($rowBook = mysqli_fetch_array($queryBook))
            {
              echo '<div class="image-item"><a href="detail.php?isbn=' . $rowBook["isbn"] . '"><img src="images/' . $rowBook["isbn"] . '.jpg" alt=""></a></div>'; 
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
        <script src="scripts/home.js"></script>
        <?php require('footer.php'); ?>
      </main>
  </body>
</html>