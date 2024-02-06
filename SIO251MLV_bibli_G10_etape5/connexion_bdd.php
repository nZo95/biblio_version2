<?php
$conn = mysqli_connect('localhost', 'root', '', 'G10');
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
?>
