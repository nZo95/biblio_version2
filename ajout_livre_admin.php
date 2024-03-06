<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Administrateur ASF</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ============ Barre de navigation ============ -->
    <div class="navigation">
        <ul>
            <li>
                <a href="index.html">
                    <span class="logo">
                        <ion-icon name="library-outline"></ion-icon>
                    </span>
                    <span class="title">ASF</span>
                </a>
            </li>

            <li>
                <a href="notif.html">
                    <span class="icon">
                        <ion-icon name="file-tray-outline"></ion-icon>
                    </span>
                    <span class="title">Notifications</span>
                </a>
            </li>

            <li>
                <a href="ajout_livre.html">
                    <span class="icon">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Ajouter un livre</span>
                </a>
            </li>

            <li>
                <a href="JSON.html">
                    <span class="icon">
                        <ion-icon name="document-outline"></ion-icon>
                    </span>
                    <span class="title">Importer JSON</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                </a>
            </li>

        </ul>

    </div>

    <div class="book-card">
        <div class="left-panel">
            <input type="text" placeholder="Titre du livre" />
            <input type="text" placeholder="ISBN" />
            <input type="date" placeholder="Date de publication" />
            <textarea placeholder="Description du livre" rows="4"></textarea>
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
    

    
    

     <!-- ============ Pour les îcones ============ -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>