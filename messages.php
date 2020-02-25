<?php 
include 'connexion.php';

?>
<?php

    $sql = "SELECT message FROM messages";
    $req = $bdd->query($sql);

    while ($row = $req->fetch()) {

        echo '<li>'.$row[0].'</li>';
    }
?>