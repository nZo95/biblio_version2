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
$id_genre = mysqli_real_escape_string($link, $_POST['genre']); // Ajustement ici
$editeur = mysqli_real_escape_string($link, $_POST['editeur']);
$id_langue = mysqli_real_escape_string($link, $_POST['langue']); // Ajustement ici
$description = mysqli_real_escape_string($link, $_POST['description']);

// Conversion de l'éditeur en id_editeur (si l'éditeur est encore entré comme texte)
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

// Ajustez la requête SQL ici avec le bon nom de colonne pour la langue. Ici, j'utilise `id` comme vous l'avez indiqué.
$sql = "INSERT INTO livre (isbn, titre, annee, id, id_genre, id_editeur, résumé) VALUES (?, ?, ?, ?, ?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    // Notez que la variable $param_id_langue est utilisée pour la colonne `id` qui correspond à la langue du livre.
    mysqli_stmt_bind_param($stmt, "ssiiiss", $param_isbn, $param_titre, $param_annee, $param_id_langue, $param_id_genre, $param_id_editeur, $param_resume);

    $param_isbn = $isbn;
    $param_titre = $titre;
    $param_annee = substr($date_publication, 0, 4); 
    $param_id_langue = $id_langue; // Cette variable correspond à l'ID de la langue
    $param_id_genre = $id_genre;
    $param_id_editeur = $id_editeur;
    $param_resume = $description;

    if(mysqli_stmt_execute($stmt)){
        echo "Livre ajouté avec succès.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);
mysqli_close($link);
?>
