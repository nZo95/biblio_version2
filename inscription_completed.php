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
<div class="confirm_container">
        <div class="space"></div>
            <h1 class="hr_confirm">Votre compte est en attente de verification</h1>
        <div class="space"><hr></div>
        <p>Cette procédure peut durer quelques heures.</p>
        <br>
        <p>Vous pouvez retourner sur le site de la bibliotèque en cliquant <a href="index.php">ici</a>.</p>
</div>
       
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>
</body>
</html>