<?php

    if (isset($_POST['newPassword']) && isset($_POST['confirmNewPassword'])) {
        $username = mysqli_real_escape_string($link, $_POST['id']);
        $password = mysqli_real_escape_string($link, $_POST['password']);
        $newPassword = mysqli_real_escape_string($link, $_POST['newPassword']);
        $confirmNewPassword = mysqli_real_escape_string($link, $_POST['confirmNewPassword']);

        if ($newPassword === $confirmNewPassword) {
            
            $checkDoublon = "SELECT id FROM compte WHERE id=$username";
            $stmt = mysqli_prepare($link, $checkDoublon);
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                echo "Ce numéro d'identification est déjà utilisé.";
            } else {
                
                $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql_insert = "INSERT INTO inscription(id, mdp) VALUES ($username, $newPassword)";
                $stmt_insert = mysqli_prepare($link, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, "ss", $username, $hashPassword);

                if (mysqli_stmt_execute($stmt_insert)) {
                    echo "Compte créé avec succès.";
                    mysqli_stmt_close($stmt_insert);
                    header("Location: inscription_completed.php");
                    exit;
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

        $sql = "SELECT id, mdp FROM compte WHERE id=$username";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $id, $hashPassword);
            mysqli_stmt_fetch($stmt);
            if (password_verify($password, $hashPassword)) {
                $_SESSION['id'] = $id;
                mysqli_stmt_close($stmt);
                header("Location: member.php");
                exit;
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Numéro d'identification incorrect.";
        }
    }

