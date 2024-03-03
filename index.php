<!DOCTYPE html>

<html lang="fr">
  <?php require('header.php'); ?>
  <head>
    <link type="text/css" rel="stylesheet" href="styles/home.css">
  </head>
  <body>
    <main>
      <div class="logos">
        <div class="logos-slide">
          <img src="images/9780090898305.jpg"/>
          <img src="images/9780090898305.jpg"/>
          <img src="images/9780090898305.jpg"/>
          <img src="images/9780090898305.jpg"/>
        </div>
      </div>
      <hr>
      <section id="signIn">
          <div id="textMember">
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
        <div id="borderSignIn">
          <h2>Devenir Membre !</h2>
          <form action="">
            <label for="id">Numéro d'identification : </label> <br>
            <input type="text" name="id" id="id" required> <br>
            <button type="button" id="btnFind">Où le trouver ?</button> <br>


            <div id="findDiv">
              <p>Pour le trouver veuillez vous 
                 rendre à votre bibliothèque.</p>
            </div>

            <div id="passwordFields" style="display: none;">

              <label for="password">Mot de passe :</label><br>
              <input type="password" id="password" name="password" required><br>

            </div>


            <div id="createPasswordFields" style="display: none;">

              <label for="newPassword">Créer votre mot de passe :</label><br>
              <input type="password" id="newPassword" name="newPassword" required><br>
              <label for="confirmNewPassword">Confirmer votre mot de passe :</label><br>
              <input type="password" id="confirmNewPassword" name="confirmNewPassword" required><br>

            </div>

            <button id="btnSubmit" type="submit">Suivant</button>
          </form>
         <p>Si vous avez déjà un compte, alors rentrez votre numéro d'identification.</p>
        </div>
      </section>
    </main>
    <script src="scripts/home.js"></script>
  </body>
  <?php require('footer.php'); ?>
</html>
