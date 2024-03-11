<?php

$conn = mysqli_connect("localhost", "root", "", "bibliov2");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (isset($_POST['newPassword']) && isset($_POST['confirmNewPassword'])) {
    $username = mysqli_real_escape_string($conn, $_POST['id']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
    $confirmNewPassword = mysqli_real_escape_string($conn, $_POST['confirmNewPassword']);

    if ($newPassword === $confirmNewPassword) {
        // Ici c'est pour verif si ya pas de doublon
        $checkDoublon = "SELECT id FROM compte WHERE id='$username'";
        $resultCheckDoublon = mysqli_query($conn, $checkDoublon);

        if (mysqli_num_rows($resultCheckDoublon) > 0) {
            echo "Ce numéro d'identification est déjà utilisé.";
        } else {
            $sql_insert = "INSERT INTO compte (id, mdp) VALUES ('$username', '$newPassword')";
            if (mysqli_query($conn, $sql_insert)) {
                echo "Compte créé avec succès.";
               // Ici rediriger l'utilisateur vers la page (membre ou autre)
            } else {
                echo "Erreur lors de la création du compte : " . mysqli_error($conn);
            }
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
} else {
    $username = mysqli_real_escape_string($conn, $_POST['id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM compte WHERE id='$username' AND mdp='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['id'] = $username;
        header("Location: member.php");
    } else {
        echo "Numéro d'identification ou mot de passe incorrect.";
    }
}

mysqli_close($conn);



