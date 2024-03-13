<?php

if (isset($_POST['newPassword']) && isset($_POST['confirmNewPassword'])) {
    $username = mysqli_real_escape_string($link, $_POST['id']);
    $newPassword = mysqli_real_escape_string($link, $_POST['newPassword']);
    $confirmNewPassword = mysqli_real_escape_string($link, $_POST['confirmNewPassword']);

    if ($newPassword === $confirmNewPassword) {
        // Ici c'est pour verif si ya pas de doublon
        $checkDoublon = "SELECT id FROM compte WHERE id='$username'";
        $resultCheckDoublon = mysqli_query($link, $checkDoublon);

        if (mysqli_num_rows($resultCheckDoublon) > 0) {
            echo "Ce numéro d'identification est déjà utilisé.";
        } else {
            $sql_insert = "INSERT INTO compte (id, mdp) VALUES ('$username', '$newPassword')";
            if (mysqli_query($link, $sql_insert)) {
                echo "Compte créé avec succès.";
               // Ici rediriger l'utilisateur vers la page (membre ou autre)
            } else {
                echo "Erreur lors de la création du compte : " . mysqli_error($link);
            }
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
} else {
    $username = mysqli_real_escape_string($link, $_POST['id']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $sql = "SELECT * FROM compte WHERE id='$username' AND mdp='$password'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['id'] = $username;
        header("Location: member.php");
    } else {
        echo "Numéro d'identification ou mot de passe incorrect.";
    }
}
?>