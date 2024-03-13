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
                echo '<div class="request_card">';
                echo "<h2>Identifiant : " . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</h2>"; 
                echo "<p>Mot de passe : $maskedPassword</p>"; // Affiche des * à la place du mdp
                echo '<button class="bouton_autoriser">Autoriser</button>';
                echo '<button class="bouton_refuser">Refuser</button>';
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

    <?php require "footer.php"; ?>
</body>
</html>
