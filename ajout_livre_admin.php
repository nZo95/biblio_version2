<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interface Administrateur ASF</title>
  <link rel="stylesheet" href="styles/admin.css">
</head>
<body>

<?php
require "header.php";

// Récupérer les genres
$genres = [];
$query = "SELECT id, libelle FROM genre";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $genres[] = $row;
}

// Récupérer les langues
$langues = [];
$query = "SELECT id, libelle FROM langue";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $langues[] = $row;
}


?>



  <div class="book-card">

    <div class="left-panel">

      <h1>Ajouter un livre</h1>
      <form action="submit.php" method="post" id="bookForm">
        <input type="text" id="isbn" name="isbn" placeholder="ISBN du livre" class="input">
        
        <input type="text" id="titre" name="titre" placeholder="Titre du livre" class="input">
        <br>
      
        <input type="date" id="date_publication" name="date_publication" placeholder="Date de publication" class="input">
        <br>
        
        <select id="genre" name="genre" class="input">
          <?php foreach ($genres as $genre) { ?>
            <option value="<?php echo htmlspecialchars($genre['id']); ?>">
              <?php echo htmlspecialchars($genre['libelle']); ?>
            </option>
          <?php } ?>
        </select>
        <br>
        
        <input type="text" id="editeur" name="editeur" placeholder="Editeur" class="input">
        <br>
      
        <input type="text" id="auteur" name="auteur" placeholder="Auteur" class="input">
        <br>
        
        <select id="langue" name="langue" class="input">
          <?php foreach ($langues as $langue) { ?>
            <option value="<?php echo htmlspecialchars($langue['id']); ?>">
              <?php echo htmlspecialchars($langue['libelle']); ?>
            </option>
          <?php } ?>
        </select>
        <br>
        
        <textarea id="description" name="description" rows="4" placeholder="Description du livre" class="input"></textarea>
        <br>

        <button class="send-button">Envoyer</button>
      </form>

    </div>

    <div class="right-panel">

      <input type="file" id="imageInput" style="display: none;" accept="image/*" />
      <div class="add-image" onclick="document.getElementById('imageInput').click();">
        <ion-icon name="add-circle-outline"></ion-icon>
        <p>Ajouter une image de couverture</p>
      </div>
      <button id="removeImageButton" style="display: none;">Retirer l'image</button>
      <img id="coverImage" style="max-width: 100%; display: none;"/>

    </div>

  </div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>

    <?php require('footer.php'); ?>

</body>
</html>
