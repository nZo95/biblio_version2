<!DOCTYPE html>
<html lang="en">
<?php
require "header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <title>Document</title>
</head>

<body>   
<div class="connexion_f">
<div class="container_form">
        <form  method="POST" action="connexion.php" method="post">
            <h2>Connexion</h2>
            <label for="id">Numéro d'identification :</label><br>
            <input type="text" id="id" name="id" required><br><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <a href="inscription.php">Pas encore de compte ?</a><br><br>
<?php

    if(isset($_POST['id']) && isset($_POST['password'])){
            $idetu = htmlspecialchars($_POST['id']);
            $mdp = sha1($_POST['password']);

            $query = mysqli_query($link, 'SELECT * FROM compte WHERE id = "' . $idetu . '" AND mdp = "' . $mdp . '";');

            if($query->num_rows > 0){
                $_SESSION['id'] = $idetu;
                $_SESSION['mdp'] = $mdp;
                header('Location: index.php');
            }else{
                echo "Mot de passe ou Numéro d'identification incorrect <br> <br>";
            }
    }

?>
            <button type="submit" name="login">Connexion</button>
            <button type="button" onclick="window.history.back()">Retour</button>
            
        </form>
    </div>
</body>
<?php require('footer.php'); ?>
</html>