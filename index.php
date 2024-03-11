<!DOCTYPE html>

<html lang="fr">

<?php
require "header.php";
?>

  <head>
    <link type="text/css" rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
  </head>
  <body>
    <main>
      <div class="space"></div>
      <div class="container-slider-wrapper">
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
          <div class="image-list">
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782253087830.jpg" alt=""></div>
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
      <div class="container-member">
        <div class="member">
          <div class="text-member">
            <h2>Pourquoi devenir <em>Membre</em> ?</h2>
            <p>
                  En devenant membre de notre bibliothèque, 
                  vous entrez dans un monde fascinant où chaque 
                  livre est une clé vers de nouvelles aventures, 
                  de nouveaux savoirs et de nouvelles perspectives. 
                  Mais les avantages ne s'arrêtent pas là.
                  En tant que membre, vous bénéficiez d'un espace 
                  personnel exclusif, votre propre sanctuaire du savoir.
                  Dans cet espace membre, vous pouvez explorer votre
                  historique de lecture, retracer vos voyages à travers 
                  les pages et redécouvrir vos moments préférés.
            </p>
          </div>
          <div class="sign-member">
            <div id="first">
          <h2>Espace Membre</h2>
          <div id="div-button">
          <button type="button" id="SignIn">Inscription</button>
          <button type="button" id="SignUp">Connexion</button>
          </div>
          </div>
          
           
            <form id="inscription" action="traitement_log.php" method="post">
            <h2>Devenir Membre !</h2>
            <h3>Numéro d'identification : </h3>
            <input type="text" name="id" id="id" required><br><br>
            <a id="buttonFind">Où le trouver ?</a><br>
            <div id="find">
              <p>Pour le trouver veuillez vous 
                  rendre à votre bibliothèque.</p>
            </div>

            <div id="createPasswordFields">
              <br>
              <br>
              <label for="newPassword">Créer votre mot de passe :</label><br><br>
              <input type="password" id="newPassword" name="newPassword" required><br><br>
              <label for="confirmNewPassword">Confirmer votre mot de passe :</label><br><br>
              <input type="password" id="confirmNewPassword" name="confirmNewPassword" required><br>

              <div id="resultPassword"></div>
            </div>

            <div id="passwordFields">
              <label for="password">Mot de passe :</label><br>
              <input type="password" id="password" name="password" required><br>
            </div>

            <button id="buttonSubmit" type="submit">Suivant</button> <br>
            <button id="btnBack">Retour</button>
          </form> 
          </div>
        </div>
      </div>
      <div class="space"></div>
    </main>
    <script src="scripts/home.js"></script>
  </body>
  <?php require('footer.php'); ?>
</html>
