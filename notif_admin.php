<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Administrateur ASF</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    
<?php
require "header.php";

if(isset($_GET["id"]) && isset($_GET["action"]))
{
    $sql_refuse = "DELETE FROM inscription WHERE id = '".$_GET['id']."';";

    if($_GET["action"] == "accept"){
        $sql_get_mdp = mysqli_fetch_array(mysqli_query($link, 'SELECT mdp FROM inscription WHERE id = "' . $_GET['id'] . '";'));
        $sql_accept = "INSERT INTO compte (id, admin, nom, prenom, mdp) VALUES ('".$_GET['id']."', 0, '', '', '" . $sql_get_mdp['mdp'] . "');";        
        mysqli_query($link, $sql_accept);
    }
    mysqli_query($link, $sql_refuse);
} 

$sql = "SELECT `id`, `mdp` FROM `inscription`";
$result = $link->query($sql);
?>
    <div class="space"></div>
        <h1 class="h1_mdp"> Demandes d'activation de compte</h1>
    <div class="space"><hr></div>

    <div class="account_container">
        <?php
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                $maskedPassword = str_repeat('*', strlen($row['mdp'])); 
                $idUtilisateur =($row['id']) ;
                echo '<div class="request_card">';
                echo "<h2>Identifiant : " . $row['id'] . "</h2> <br>"; 
                echo "<a class='bouton_autoriser' href ='?id=".$idUtilisateur."&action=accept'>Accepter</a>";
                echo "<a class='bouton_refuser'href ='?id=".$idUtilisateur."&action=refuse'>Refuser</a>";
                echo '</div>';
            }
        } else {
            echo "Aucune demande d'activation de compte pour le moment.";
        }
        
        ?>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>
    <a class="form-logout-btn" href="deconnexion.php"><input type="submit" value="Déconnexion"></a> 
    <?php require "footer.php"; ?>
</body>
</html>
