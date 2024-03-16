<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "header.php"; ?>

    <?php
     
        $libelleEditeur = $_POST['editeur'];

        // Requête pour compter le nombre d'éditeurs existants
        $sqlCount = "SELECT MAX(id) as maxId FROM editeur";
        $result = $link->query($sqlCount);
        $row = $result->fetch_assoc();
        $newId = $row['maxId'] + 1;

        // Requête SQL pour insérer le nouvel éditeur avec l'ID calculé
        $sqlInsert = "INSERT INTO editeur (id, libelle) VALUES ($newId, '$libelleEditeur')";

        if ($link->query($sqlInsert) === TRUE) {
            echo "Nouvel éditeur ajouté à la base de données avec succès !";
        } else {
            echo "Erreur : " . $sqlInsert . "<br>" . $link->error;
        }
    ?>

    <?php require "footer.php"; ?>
</body>


</html>