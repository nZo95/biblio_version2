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

          if (isset($_POST["note"]) && isset($_POST["commentary"]))
          {
              try 
              {
                $stmt = $link->prepare("INSERT INTO note (isbn, id, etoile) VALUES (?, ?, ?)");
                $stmt->execute(array($isbn, $_SESSION["id"], $_POST["note"]));
                $stmt->close();
                  
                $stmt = $link->prepare("INSERT INTO commentaire (isbn, id, commentaire) VALUES (?, ?, ?)");
                $stmt->execute(array($isbn, $_SESSION["id"], $_POST["commentary"]));
                $stmt->close();
              } catch (Exception $e) { }
          }

          $stmt = $link->prepare("SELECT count(*), titre, annee, nbpages, id, id_genre, id_editeur, resume FROM livre WHERE isbn=?");
          $stmt->execute(array($isbn));
          $stmt->bind_result($countBook, $titleBook, $yearBook, $countPagesBook, $idLanguageBook, $idGenreBook, $idEditorBook, $resume);
          $stmt->fetch();
          $stmt->close();

          $query = mysqli_query($link, "SELECT * FROM note WHERE isbn = " . $isbn . ";");
          $note = "";
          if ($query->num_rows > 0)
          {
            $valueCount = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM note WHERE isbn = " . $isbn . ";"));
            $valueNote = 0;
            while ($row = mysqli_fetch_array($query))
            {
              $valueNote = $valueNote + $row["etoile"];
            }
  
            $valueNote = round($valueNote / $valueCount["count(*)"]);
            for ($i = 0; $i < $valueNote; $i++)
            {
              $note = $note . "&bigstar;";
            }
            $titleBook = $titleBook . " - " . $note;
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
        </div>
      </div>
      <?php 
        $query = mysqli_query($link, "SELECT * FROM note WHERE isbn = " . $isbn . ";");
        $count = 0;
        $haveNote = false

        if ($query && $query->num_rows > 0) 
        { 
          echo '<div class="space"><hr class="down"></div>';
          while ($rowNote = mysqli_fetch_array($query))
          {
            $rowCommentary = mysqli_fetch_array(mysqli_query($link, 'SELECT * FROM commentaire WHERE isbn = ' . $isbn . ' AND id = "' . $rowNote["id"] . '";'));
            $note = "";
            for ($i = 0; $i < $rowNote["etoile"]; $i++)
            {
              $note = $note . "&bigstar;";
            }
            $rowMember = mysqli_fetch_array(mysqli_query($link, 'SELECT prenom, nom FROM compte WHERE id = "' . $rowNote["id"] . '";'));
            $member = $rowNote["id"];
            if (!$haveNote && isset($_SESSION["id"]) && $_SESSION["id"] == $rowNote["id"]) { $haveNote = true; }
            if (!empty($rowMember["prenom"]) || !empty($rowMember["nom"]))
            {
              $member = $rowMember["prenom"] . " " . $rowMember["nom"];
            }
            $count++;
            
            echo '<div class="container-memberNotice">
                  <p class="member">' . $member . " - " . $note . '</p>
                  <p class="commentary">' . $rowCommentary["commentaire"] . '</p>
                  <br></div>';
            
            if ($count != $query->num_rows)
            {
              echo '<br>';
            }
          }
        }
      ?>
      <?php if (!isset($_SESSION["id"]) || $haveNote) { echo '<div class="space"></div>'; require('footer.php'); return; } ?>
      <div class="space"><hr class="down"></div>;
      <div class="container-notice">
        <?php echo '<form name="importCommentary" id="importCommentary" class="notice" method="post" action="detail.php?isbn=' . $isbn . '">'; ?>
          <p>Donnez votre avis sur <?php echo "<em>" . $titleBook . "</em>" ?></p>
          <select name="note" class="input">
            <option value="5">&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;</option>
            <option value="4">&bigstar;&bigstar;&bigstar;&bigstar;</option>
            <option value="3">&bigstar;&bigstar;&bigstar;</option>
            <option value="2">&bigstar;&bigstar;</option>
            <option value="1">&bigstar;</option>
          </select>
          <br>
          <textarea name="commentary" rows="4" placeholder="Votre commentaire" class="input"></textarea>
          <input type="button" id="commentarySubmit" name="commentarySubmit" value="Envoyer" onClick="document.getElementById('importCommentary').submit();"/>
          <br><br>
        </form>
      </div>
      <div class="space"></div>
    </main>
  </body>
  <?php require('footer.php'); ?>
</html>
