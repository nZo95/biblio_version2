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
?>

<h2 class="h2_submit">Livre ajouté avec succès !</h2>
<form action="ajout_livre_admin.php" class="form_submit">
    <input type="submit" value="Retour à l'accueil" />
</form>

<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "bibliov2";
$link = mysqli_connect($host, $user, $password, $dbname);

if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

$isbn = mysqli_real_escape_string($link, $_POST['isbn']);
$titre = mysqli_real_escape_string($link, $_POST['titre']);
$date_publication = mysqli_real_escape_string($link, $_POST['date_publication']);
$id_genre = mysqli_real_escape_string($link, $_POST['genre']); 
$editeur = mysqli_real_escape_string($link, $_POST['editeur']);
$id_langue = mysqli_real_escape_string($link, $_POST['langue']); 
$description = mysqli_real_escape_string($link, $_POST['description']);

// Convertir l'éditeur en id_editeur 
$queryEditeur = "SELECT id FROM editeur WHERE libelle = ?";
if($stmtEditeur = mysqli_prepare($link, $queryEditeur)){
    mysqli_stmt_bind_param($stmtEditeur, "s", $editeur);
    mysqli_stmt_execute($stmtEditeur);
    $resultEditeur = mysqli_stmt_get_result($stmtEditeur);
    if ($rowEditeur = mysqli_fetch_assoc($resultEditeur)) {
        $id_editeur = $rowEditeur['id'];
    } else {
        echo "Éditeur non trouvé.";
        exit;
    }
    mysqli_stmt_close($stmtEditeur);
} else{
    echo "ERROR: Could not prepare query: $queryEditeur. " . mysqli_error($link);
}

$sql = "INSERT INTO livre (isbn, titre, annee, id, id_genre, id_editeur, résumé) VALUES (?, ?, ?, ?, ?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ssiiiss", $param_isbn, $param_titre, $param_annee, $param_id_langue, $param_id_genre, $param_id_editeur, $param_resume);
    $param_isbn = $isbn;
    $param_titre = $titre;
    $param_annee = substr($date_publication, 0, 4); 
    $param_id_langue = $id_langue;
    $param_id_genre = $id_genre;
    $param_id_editeur = $id_editeur;
    $param_resume = $description;

    if(mysqli_stmt_execute($stmt)){
        echo "";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);
mysqli_close($link);
?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="scripts/admin.js"></script>
</body>
</html>