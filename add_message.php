<?php 
session_start();
include 'connexion.php';

if (!empty($_POST['message'])) {
    
    $sql_id = "SELECT * FROM users WHERE name = '".$_SESSION['name']."' ";
    $req_id = $bdd->query($sql_id);
    while ($row_id = $req_id->fetch()) {
        
        $id_name = $row_id['id'];
    }
    $message = addslashes($_POST['message']);
    
    $time = date("H:i:s");
    $date = date("d/m/Y");
    
    $sql = "INSERT INTO messages (message, id_user, time, date) VALUES ('$message', '$id_name', '$time', '$date') ";
    $req = $bdd->query($sql);
}