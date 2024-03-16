<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interface Administrateur ASF</title>
  <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <?php require "header.php"; ?>

    <h2 class="h2_submit">Editeur ajouté avec succès !</h2>
    <form action="ajout_livre_admin.php" class="form_submit">
        <input type="submit" value="Retour à l'accueil" />
    </form>

    <?php
     
        $libelleEditeur = $_POST['editeur'];
        $sqlCount = "SELECT MAX(id) as maxId FROM editeur";
        $result = $link->query($sqlCount);
        $row = $result->fetch_assoc();
        $newId = $row['maxId'] + 1;
        $sqlInsert = "INSERT INTO editeur (id, libelle) VALUES ($newId, '$libelleEditeur')";

        if ($link->query($sqlInsert) === TRUE) {
            
        } else {
            echo "Erreur : " . $sqlInsert . "<br>" . $link->error;
        }
    ?>

    <?php require "footer.php"; ?>
</body>


</html>