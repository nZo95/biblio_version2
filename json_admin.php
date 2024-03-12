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

    <div class="space"></div>
        <h1 class="h1_json"> Demandes d'activation de compte</h1>
    <div class="space"><hr></div>

    <div class="json_container">
        <p>Importer le JSON :</p>
        <a href=""><ion-icon name="cloud-download-outline"></ion-icon></a>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>
</body>
</html>