<?php include 'connexion.php'; ?>

<?php

if (!empty($_POST['message'])) {

    $message = $_POST['message'];

    $sql = "INSERT INTO messages (message) VALUES ('$message') ";
    $req = $bdd->query($sql);

}
?>