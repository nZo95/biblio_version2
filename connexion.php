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
<div class="connexion_f">
        <form id="connexion" action="traitement_log.php" method="post">
            <h2>Connexion</h2>
            <label for="id">Numéro d'identification :</label><br>
            <input type="text" id="id" name="id" required><br><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <a href="forgot_password.php">Mot de passe oublié ?</a><br>
            <a href="inscription.php">Pas encore de compte ?</a><br><br>
            <button type="submit">Connexion</button>
            <button type="button" onclick="window.history.back()">Retour</button>
        </form>
    </div>
    <?php require('footer.php'); ?>
</body>
</html>