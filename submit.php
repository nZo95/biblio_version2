<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bibliov2";
$link = mysqli_connect($host, $user, $password, $dbname);

// Vérifier la connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$isbn = mysqli_real_escape_string($link, $_POST['isbn']);
$titre = mysqli_real_escape_string($link, $_POST['titre']);
$date_publication = mysqli_real_escape_string($link, $_POST['date_publication']);
$genre = mysqli_real_escape_string($link, $_POST['genre']);
$editeur = mysqli_real_escape_string($link, $_POST['editeur']);
$langue = mysqli_real_escape_string($link, $_POST['langue']);
$description = mysqli_real_escape_string($link, $_POST['description']);

// Conversion de genre en id_genre
$queryGenre = "SELECT id FROM genre WHERE libelle = '$genre'";
$resultGenre = mysqli_query($link, $queryGenre);
if ($rowGenre = mysqli_fetch_assoc($resultGenre)) {
    $id_genre = $rowGenre['id'];
} else {
    echo "Genre non trouvé.";
    exit;
}

// Conversion d'éditeur en id_editeur
$queryEditeur = "SELECT id FROM editeur WHERE libelle = '$editeur'";
$resultEditeur = mysqli_query($link, $queryEditeur);
if ($rowEditeur = mysqli_fetch_assoc($resultEditeur)) {
    $id_editeur = $rowEditeur['id'];
} else {
    echo "Éditeur non trouvé.";
    exit;
}

// Conversion de langue en id_langue
$queryLangue = "SELECT id FROM langue WHERE libelle = '$langue'";
$resultLangue = mysqli_query($link, $queryLangue);
if ($rowLangue = mysqli_fetch_assoc($resultLangue)) {
    $id_langue = $rowLangue['id'];
} else {
    echo "Langue non trouvée.";
    exit;
}

// Insertion des données dans la table livre
$sql = "INSERT INTO livre (isbn, titre, annee, id, id_genre, id_editeur, résumé) VALUES (?, ?, ?, ?, ?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ssiiiss", $param_isbn, $param_titre, $param_annee, $param_id_langue, $param_id_genre, $param_id_editeur, $param_resume);

    $param_isbn = $isbn;
    $param_titre = $titre;
    $param_annee = substr($date_publication, 0, 4); // Extrait l'année depuis la date
    $param_id_langue = $id_langue;
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
