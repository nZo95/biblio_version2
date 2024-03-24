<!DOCTYPE html>
<html lang="fr">
<?php require 'header.php';
?> 


<?php

if(isset($_POST['save'])){
    $bdd = new PDO('mysql:host=localhost;dbname=bibliov2;charset=utf8;', 'root', '');
    $op = $_POST['password'];
    $np = $_POST['newpassword'];
    $cnp = $_POST['cpassword'];

    $op = sha1($op);

    if($np == $cnp){
        $query = $bdd->prepare("SELECT * FROM compte WHERE mdp = :mdp");
        $query->bindParam(':mdp', $op);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0){
            $updateQuery = $bdd->prepare("UPDATE compte SET mdp = :newPassword");
            $mdp = sha1($np);
            $updateQuery->bindParam(':newPassword', $mdp);
            $updateQuery->execute();
            echo "Mot de passe mis à jour";
        }
        else{
            echo "L'ancien mot de passe ne correspond pas";
        }
    }
    else{
        echo "Le nouveau mot de passe et la confirmation ne correspondent pas";
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre - ASF</title>
    <link rel="stylesheet" href="styles/member.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <script src="scripts/member.js" defer></script>
</head>
<body>
    <?php
if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

$nom_utilisateur = $_SESSION['id'];

?>
    <div class ="space">
        <?php 
        echo "<h1> Bienvenue sur votre espace membre !</h1>"
        ?>
        
        <img class="sizeimg" src="images/user.png" alt="">
    </div>
    <div class ="space">
        <div class="form-submit-btn">
                            
            <a class="form-logout-btn" href="deconnexion.php"><input type="submit" value="Déconnexion"></a> 
                
        </div>
    </div>
    <section>
        <div class="space">
            <div class="content">
                <form  method="POST">
                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="secondname">Prénom</label>
                            <input type="text"
                                    id="secondname"
                                    name="secondname"
                                    placeholder="Prénom"/>
                        </div>
                        <div class="user-input-box">
                            <label for="name">Nom</label>
                            <input type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Pseudo"/>
                        </div>
                        <div class="user-input-box">
                            <label for="mail">Adresse Mail</label>
                            <input type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Email"/>
                        </div>
                        <div class="user-input-box">
                            <label for="phone">Téléphone</label>
                            <input type="text"
                                    id="phoneNumber"
                                    name="phoneNumber"
                                    placeholder="Téléphone"/>
                        </div>
                    </div>
                    <div class="form-submit-btn">
                        <input type="submit" id="submi" name="submi" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php

if(isset($_POST['submi'])){
    $bdd = new PDO('mysql:host=localhost;dbname=bibliov2;charset=utf8', 'root', '');

    $userId = $_SESSION['id'];
    
    $prenom = $_POST['secondname'];
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['phoneNumber'];

    $query = $bdd->prepare("UPDATE compte SET prenom = :prenom, nom = :nom, mail = :email, phone = :telephone WHERE id = :id_utilisateur");
    $query->bindParam(':id_utilisateur', $userId);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);


    if($query->execute()){
        echo "Données mises à jour avec succès dans la base de données.";
    } else {
        echo "Une erreur s'est produite lors de la mise à jour des données dans la base de données.";
    }
}

?>
    <hr>
        <div class="space">
        <h1>Réservation</h1>
    </div>
      <div class="container-slider-wrapper">
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
          <div class="image-list">
            <div class="image-item"><img src="images/9780090898305.jpg" alt=""></div>
            <div class="image-item"><img src="images/9780151001637.jpg" alt=""></div>
            <div class="image-item"><img src="images/9780307792365.jpg" alt=""></div>
            <div class="image-item"><img src="images/9782330180805.jpg" alt=""></div>
            <div class="image-item"><img src="images/9783746612249.jpg" alt=""></div>
            <div class="image-item"><img src="images/9780340960196.jpg" alt=""></div>
            <div class="image-item"><img src="images/9780307969941.jpg" alt=""></div>
          </div>
          <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
        </div>
    </div>
    <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
    </div>
    <hr>
    <div class ="space">
        <h1>Paramètres</h1>
    </div>
        <div class="space">
            <div class="content-setting">
                <form method="post">

                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="password">Mot de passe</label>
                            <input type="password"
                                    id="newpassword"
                                    name="newpassword"
                                    placeholder="Nouveau Mot de passe"/>
                        </div>
                        <div class="user-input-box">
                            <label for="password">Ancien</label>
                            <input type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Mot de passe"/>
                        </div>
                        <div class="user-input-box">
                            <label for="password">Confirmation</label>
                            <input type="password"
                                    id="cpassword"
                                    name="cpassword"
                                    placeholder="Confirmation mot de passe"/>
                        </div>

                    </div>
                    <div class="form-submit-btn">
                    <input id="save" name="save" type="submit" value="Enregistrer"></a> 
                    </div>
                </form>
            </div>
        </div>
    
</body>
<?php require 'footer.php'?>
</html>