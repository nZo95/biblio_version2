<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliov2;charset=utf8;', 'root', '');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['id']) AND !empty($_POST['newPassword'])){
            $codeetu = htmlspecialchars($_POST['id']);
            $mdp = sha1($_POST['newPassword']);
            try {
                $insertUser = $bdd->prepare('INSERT INTO inscription(id, mdp)VALUES(?, ?)');
                $insertUser->execute(array($codeetu, $mdp));
 
                $recupUser = $bdd->prepare('SELECT * FROM inscription WHERE id = ? AND mdp = ?');
                $recupUser->execute(array($codeetu,$mdp ));
                if($recupUser->rowCount() > 0){
                   
                    $_SESSION['id'] = $codeetu;
                    $_SESSION['newPassword'] = $mdp;
                    $_SESSION['id'] = $recupUser->fetch()['id'];
               
                }
            } catch(Exception $e) { }
            header('Location: inscription_completed.php');
        }else{
            echo "Veuillez compléter tout les champs";
        }
    }
?>