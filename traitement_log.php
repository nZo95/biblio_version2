<?php

$conn = mysqli_connect("localhost", "root", "", "bibliov2");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$username = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM compte WHERE id='$username' AND mdp='$password'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['id'] = $username;
    header("Location: member.php");
} else {
    echo "Numéro d'identification ou mot de passe incorrect.";
}

mysqli_close($conn);
