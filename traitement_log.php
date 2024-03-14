<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bibliov2;charset=utf8;', 'root', '');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['id']) AND !empty($_POST['newPassword'])){
            $pseudo = htmlspecialchars($_POST['id']);
            $mdp = sha1($_POST['newPassword']);
            $insertUser = $bdd->prepare('INSERT INTO inscription(id, mdp)VALUES(?, ?)');
            $insertUser->execute(array($pseudo, $mdp));
 
            $recupUser = $bdd->prepare('SELECT * FROM inscription WHERE id = ? AND mdp = ?');
            $recupUser->execute(array($pseudo,$mdp ));
            if($recupUser->rowCount() > 0){
               
                $_SESSION['id'] = $pseudo;
                $_SESSION['newPassword'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];
           
            }
            header('Location: inscription_completed.php');
        }else{
            echo "Veuillez compléter tout les champs";
        }
    }


