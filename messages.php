<?php 
session_start();
include 'connexion.php';
$name = $_SESSION['name'];

    $sql = "SELECT * FROM messages INNER JOIN users ON messages.id_user = users.id";
    $req = $bdd->query($sql);


    while ($row = $req->fetch()) {

        if ($name === $row['name']) {

            echo '<p class="text-right from-me"> '.$row['message'].' <li class="text-right time"> '.$row['time'].' '.$row['date'].' </li></p>';
            
        } else {
            
            echo "<li class='text-left from'> ".$row['name']." </li>";
            echo '<p class="text-left from-them"> '.$row['message'].'</p>';
            echo "<li class='text-left'> ".$row['time']." ".$row['date']." </li>";
        }

    }
?>