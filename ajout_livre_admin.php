<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Administrateur ASF</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    
<?php require('header.php'); ?>

    <div class="book-card">
        <div class="left-panel">
            <input type="text" placeholder="Titre du livre" class="input"/>
            <input type="text" placeholder="Auteur" class="input"/>
            <input type="text" placeholder="Editeur" class="input"/>
            <input type="text" placeholder="ISBN" class="input"/>
            <input type="text" placeholder="Genre" class="input"/>
            <input type="text" placeholder="Langue" class="input"/>
            <input type="date" placeholder="Date de publication" class="input"/>
            <textarea placeholder="Description du livre" rows="4" class="input"></textarea>
            <button class="send-button">Envoyer</button>
        </div>
        <div class="right-panel">
            <input type="file" id="imageInput" style="display: none;" accept="image/*" /> <!-- ============ Pour ouvrir les fichiers pour choisir l'image du livre ============ -->
            <div class="add-image" onclick="document.getElementById('imageInput').click();"> 
                <ion-icon name="add-circle-outline"></ion-icon>
                <p>Ajouter une image de couverture</p>
            </div>
            <img id="coverImage" style="max-width: 100%; display: none;"/>
        </div>
        
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>

    <?php require('footer.php'); ?>
</body>
</html>