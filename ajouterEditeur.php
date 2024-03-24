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
        $sqlCount = "SELECT MAX(id) AS maxId FROM editeur";
        $result = $link->query($sqlCount);
        $row = $result->fetch_assoc();
        $newId = $row['maxId'] + 1;

        $stmt = $link->prepare("INSERT INTO editeur (id, libelle) VALUES (?, ?)");

        $stmt->bind_param("is", $newId, $libelleEditeur);

        if ($stmt->execute()) {
            echo "<p>Éditeur ajouté avec succès !</p>";
        } else {
            echo "<p>Erreur lors de l'ajout de l'éditeur : " . $stmt->error . "</p>";
        }

        $stmt->close();
    ?>

    <?php require "footer.php"; ?>
</body>


</html>