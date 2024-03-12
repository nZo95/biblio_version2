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
        
        <input type="text" id="genre" name="genre" placeholder="Genre" class="input">
        <br>
        
        <input type="text" id="editeur" name="editeur" placeholder="Editeur" class="input">
        <br>
      
        <input type="text" id="auteur" name="auteur" placeholder="Auteur" class="input">
        <br>
        
        <input type="text" id="langue" name="langue" placeholder="Langue" class="input">
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

<?php


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $isbn = $_POST['isbn'];
//   $titre = $_POST['titre'];
//   $date_publication = $_POST['date_publication'];
//   $genre = $_POST['genre'];
//   $editeur = $_POST['editeur'];
//   $auteur = $_POST['auteur'];
//   $langue = $_POST['langue'];
//   $description = $_POST['description'];


//   $sql = "INSERT INTO livre (isbn, titre, annee, nbpages, reserve, id, id_genre, id_editeur, résumé)
//     VALUES ($isbn, '$titre', '$date_publication', , , '$langue', '$genre', '$editeur', '$description');";

  
//   $result = mysqli_query($sql);

//   if ($result) {
//     echo "<p>Le livre a été ajouté avec succès.</p>";
//   } else {
//     echo "<p>Une erreur est survenue lors de l'insertion du livre.</p>";
//   }

// }

?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>

    <?php require('footer.php'); ?>

</body>
</html>
