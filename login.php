<?php
$bdd = new PDO('mysql:host=localhost;dbname=bibliov2;charset=utf8;', 'root', '');
if(isset($_POST['login'])){
    if(!empty($_POST['id']) AND !empty($_POST['password'])){
        $idetu = htmlspecialchars($_POST['id']);
        $mdp = sha1($_POST['password']);
        
        $recupUser = $bdd->prepare('SELECT * FROM compte WHERE id = ? AND mdp = ?');
        $recupUser->execute(array($idetu, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['id'] = $idetu;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            echo $_SESSION['id'];
            header('Location: index.php');
        }else{
            echo "Mot de passe ou pseudo incorrecte";
        }
    }else{
        echo "Veuillez compléter tous les champs";
    }
}

?>