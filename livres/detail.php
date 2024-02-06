<?php
include '../connexion_bdd.php'; 
include 'header.php'; 

$isbn = isset($_GET['isbn']) ? $_GET['isbn'] : '';

$query = "SELECT Livre.titre, Livre.annee, Livre.isbn, Livre.nbpages, Livre.resume, Personne.nom, Personne.prenom 
          FROM Livre 
          INNER JOIN Auteur ON Livre.isbn = Auteur.idLivre 
          INNER JOIN Personne ON Auteur.idPersonne = Personne.id 
          WHERE Livre.isbn = ?";
if ($stmt = mysqli_prepare($conn, $query)) {
    mysqli_stmt_bind_param($stmt, "s", $isbn);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $livre = mysqli_fetch_assoc($result);

    if ($livre) {
        echo "<main>";
        echo "<section>";
        echo "<h2 class='IMG1'><img src='../images/" . htmlspecialchars($livre['isbn']) . ".jpg' alt='Image de couverture de " . htmlspecialchars($livre['titre']) . "' width='357'></h2>";
        echo "<div class='Text'>";
        echo "<p class='Titre'>" . htmlspecialchars($livre['titre']) . "</p>";
        echo "<p class='contenu'><strong>Écrit par : </strong>" . htmlspecialchars($livre['prenom']) . " " . htmlspecialchars($livre['nom']) . "</p>";
        echo "<p class='contenu'><strong>Publié en : </strong>" . htmlspecialchars($livre['annee']) . "</p>";
        echo "<p class='contenu'><strong>Numéro ISBN13 : </strong>" . htmlspecialchars($livre['isbn']) . "</p>";
        echo "<p class='contenu'><strong>Nombre de pages : </strong>" . htmlspecialchars($livre['nbpages']) . "</p>";
        echo "<p class='contenu'><strong>Résumé :</strong><br><br>" . nl2br(htmlspecialchars($livre['resume'])) . "</p>";
        echo "</div>";
        echo "</section>";
        echo "</main>";
        } else {
        echo "Livre introuvable.";
        }
        mysqli_stmt_close($stmt);
        } else {
        echo "Erreur de requête: " . mysqli_error($conn);
        }

include 'footer.php'; 