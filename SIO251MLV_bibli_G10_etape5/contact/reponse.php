<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reponse.css">
    <title>Document</title>
</head>
<body>
    <div id="mere">    
        <?php
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        if(isset($_POST["nom"]) && $_POST["nom"]!=""){
            echo "<div class='fille'><h1>Nous avons reçu votre demande <em>$nom</em> !</div>";
        }else{
            echo "<div class='fille'><h1>Oups ! il me semble que vous n'avez pas saisi votre nom.</h1></div>";
        }

        if(isset($_POST["email"]) && $_POST["email"]!=""){
            echo "<div class='fille'><h2>Nous vous donnerons une réponse directement à votre adresse email : <em>$email</em> merci à vous.</h2></div>";
        }else{
            echo "<div class='fille'><h1>Oups ! il me semble que vous n'avez pas saisi votre mail.</h1></div>";
        }
        if(isset($_POST["type-demande"]) && $_POST["type-demande"]!=""){
            
        }else{
            echo "<div class='fille'>Oups ! il me semble que vous n'avez pas saisi le type de votre demande.</div>";
        }
        if(isset($_POST["message"]) && $_POST["message"]!=""){

        }else{
            echo "vous n'avez pas saisi de message. <a href='contact.php'>Revenir à la page contact</a>";
        } 
        echo "<div class='fille'><p>Vous pouvez retourner à l'accueil en cliquant sur le bouton ci-dessous.</p></div>";
        echo "<div class='fille'><a href='../index.php'><button>Retour à l'acceuil</button></a></div>";
        ?>
    <div>    
</body>
</html>