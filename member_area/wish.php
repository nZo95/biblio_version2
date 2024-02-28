<!DOCTYPE html>
<html lang="fr">
<?php require('../header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre ASF</title>
    <link rel="stylesheet" href="styles/member.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  
    <div class="container">

          <!-- ============ Barre de navigation ============ -->

        <div class="navigation">

            <ul>
                <li>
                    <a href="#">
                        <span class="icon">

                            <ion-icon name="library-outline"></ion-icon>

                        </span>

                        <span class="title">ASF</span>

                    </a>
                </li>


                <li>
                    <a href="../member.php">

                        <span class="icon">

                          <ion-icon name="home-outline"></ion-icon>

                        </span>

                        <span class="title">Accueil</span>
                    </a>
                </li>

                <li>
                    <a href="wish.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Favoris</span>
                    </a>
                </li>

                <li>
                    <a href="reservation.php">
                        <span class="icon">
                          <ion-icon name="bookmark-outline"></ion-icon>
                        </span>
                        <span class="title">Réservation</span>
                    </a>
                </li>

                <li>
                    <a href="setting.php">
                        <span class="icon">
                          <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Paramètre</span>
                    </a>
                </li>
            </ul>
        </div>

               <!-- ============ Menu ============ -->

        <div class="main">

            <div class="topbar">

                <div class="toggle">

                    <ion-icon name="menu-outline"></ion-icon>

                </div>

            </div>

            <!-- ============ Résa en cours ============ -->

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">

                        <div>
                          <h1>Bienvenue dans l'espace Membre !</h1>

                          <p>ffdfdffddffd</p>

                        </div>

                    </div>
                </div>

            </div>

        </div> <!-- fin du main -->

    </div> <!-- fin du container -->

     <!-- ============ Script ============ -->

     <script src="admin_interface_BBV2/assets/js/main.js"></script>


     <!-- ============ Pour les îcones ============ -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>