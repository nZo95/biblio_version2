<!DOCTYPE html>

<html lang="fr">
  <?php require('header.php'); ?>
  <head>
    <link type="text/css" rel="stylesheet" href="styles/detail.css">
  </head>
  <body>
    <main>
        <?php
          if (!isset($_GET["isbn"])) 
          { 
            echo '<div class="space"></div>
            <h2>ISBN Incorrect</h2>
            <div class="space"><hr></div>';

            return;
          }

          $isbn = htmlspecialchars($_GET["isbn"]);

          $stmt = $link->prepare("SELECT count(*), titre, annee, nbpages, id, id_genre, id_editeur, resume FROM livre WHERE isbn=?");
          $stmt->execute(array($isbn));
          $stmt->bind_result($countBook, $titleBook, $yearBook, $countPagesBook, $idLanguageBook, $idGenreBook, $idEditorBook, $resume);
          $stmt->fetch();
          $stmt->close();
          
          if ($countBook == 0) 
          { 
            echo '<div class="space"></div>
            <h2>ISBN Incorrect</h2>
            <div class="space"><hr></div>';
            
            return;
          }

          echo '<div class="space"></div>
                <h2>' . $titleBook . '</h2>
              <div class="space"><hr></div>
              <div class="container-book">
                <div class="book">';

          $query = mysqli_fetch_array(mysqli_query($link, "SELECT libelle FROM genre WHERE id = " . $idGenreBook . ";"));
          $wordingGenre = $query["libelle"];

          echo '<div class="image-item">
                <img src="images/' . $isbn . '.jpg" alt="error">
              </div>
              <div class="text-item">
                <p class="center">Livre de <em>' . $wordingGenre . '</em></p>';
                $queryAuthor = mysqli_query($link, "SELECT id, id_role FROM auteur WHERE isbn = " . $isbn . ";");
                while ($row = mysqli_fetch_array($queryAuthor))
                {
                  $query = mysqli_fetch_array(mysqli_query($link, "SELECT libelle FROM role WHERE id = " . $row["id_role"] . ";"));
                  $role = $query["libelle"];
                  $query = mysqli_fetch_array(mysqli_query($link, "SELECT nom, prenom FROM personne WHERE id = " . $row["id"] . ";"));
                  echo '<p class="center">' . $role . ' : ' . $query["prenom"] . ' ' . $query["nom"] . '</p>';
                }
                $query = mysqli_fetch_array(mysqli_query($link, "SELECT libelle FROM editeur WHERE id = " . $idEditorBook . ";"));
                $wordingEditor = $query["libelle"];
                echo '<p class="center">Edition ' . $wordingEditor . ', publié en ' . $yearBook . '</p>';
                $query = mysqli_fetch_array(mysqli_query($link, "SELECT libelle FROM langue WHERE id = " . $idLanguageBook . ";"));
                $wordingLanguage = $query["libelle"];
                echo '<p class="center">Langue Originale : ' . $wordingLanguage . '</p>';
                echo '<h3 class="center">Résumé : </h3>';
                echo '<p class="center">' . $resume . '</p>';
          
          echo '</div>';
          ?>
          <!-- <div class="text-item">
            <p class="center">Livre de Science-fiction</p>
            <p class="center">Edition Millenium, publié en 1995</p>
            <p class="center">Langue Originale : Anglais</p>
            <h3>Résumé : </h3>
            <p class="resume">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div> -->
        </div>
      </div>
      <div class="space"></div>
    </main>
  </body>
  <?php require('footer.php'); ?>
</html>
