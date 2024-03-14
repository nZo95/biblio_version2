<?php require "header.php"; 
if(isset($_POST['login'])){
    if(!empty($_POST['id']) AND !empty($_POST['password'])){
        $idetu = htmlspecialchars($_POST['id']);
        $mdp = sha1($_POST['password']);
        
        $recupUser = $link->prepare('SELECT * FROM compte WHERE id = ? AND mdp = ?');
        $recupUser->execute(array($idetu, $mdp));

        echo var_dump(mysqli_query($link, 'SELECT * FROM compte WHERE id = "zizi" AND mdp = "c129b324aee662b04eccf68babba85851346dff9";'));

        if($recupUser->num_rows > 0){
            $_SESSION['id'] = $idetu;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: index.php');
        }else{
            echo "Mot de passe ou pseudo incorrecte";
        }
    }else{
        echo "Veuillez compléter tous les champs";
    }
}

?>