<!DOCTYPE html>
<html lang="en">
    <?php
        require "header.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <title>Document</title>
</head>
    <body>
        <div class="inscription_f">
            <form id="inscription" action="traitement_log.php" method="post">
                <h2>Devenir Membre !</h2> <br>
                <label for="id">Numéro d'identification : </label><br><br>
                <input type="text" name="id" id="id" required><br><br>
                <a id="buttonFind">Où le trouver ?</a>
                <div id="find">
                    <p>Pour le trouver veuillez vous rendre à votre bibliothèque.</p>
                </div> <br>

                    <label for="newPassword">Créer votre mot de passe :</label><br><br>
                        <input type="password" id="newPassword" name="newPassword" required><br><br>
                    <label for="confirmNewPassword">Confirmer votre mot de passe :</label><br><br>
                        <input type="password" id="confirmNewPassword" name="confirmNewPassword" required><br>

                    <div id="resultPassword"></div> <br>

                <button id="subbtn" type="submit" name="envoi">Envoyer</button> <br>
                <button type="button" id="btnback_insc" onclick="window.history.back()">Retour</button>

            </form>
        </div>
        <?php require('footer.php'); ?>
        <script src="scripts/home.js"></script>
    </body>
</html>