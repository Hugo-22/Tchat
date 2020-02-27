<?php
session_start();
include 'connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bubbles.css">

    <title>Tchat</title>
</head>
<body>

<div class="chat_window">
        <div class="top_menu">
            <div class="buttons">
                <a class="button" href="logout.php" title="Déconnexion"></a>
                <div class="button minimize"></div>
                <div class="button maximize"></div>
            </div>
            <div class="title">Tchat</div>
            <div class="connected">
            <?php
            echo "<span class='connected-circle'></span>" . $_SESSION['name'];
            ?>
            </div>
        </div>
        <ul class="messages text-area"></ul>
        <div class="bottom_wrapper clearfix">
            <div class="message_input_wrapper">
                <input class="message_input" type="text" name="message" id="msg">
        </div>
        <div class="send_message1">
            <div class="icon"></div>

            <input class="send_message" type="button" id="submit" onclick="scrollWin(0, 1000)">

            </div>
        </div>
    </div>

    <script>
        const textArea = document.querySelector(".text-area");
        
        function scrollWin(x, y) {
            textArea.scrollBy({
            top: 1000,
            behavior: 'smooth'
        })
    }

        function load(){

let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  
  if (this.readyState == 4 && this.status == 200) {
  //   document.getElementById("text-area").innerHTML =
  //   this.responseText;
    const textArea = document.querySelector(".text-area").innerHTML = this.responseText;
  }
};

xhr.open("GET", "messages.php", true);
xhr.send();

}


    window.onload = function(){

let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  
  if (this.readyState == 4 && this.status == 200) {
  //   document.getElementById("text-area").innerHTML =
  //   this.responseText;
    const textArea = document.querySelector(".text-area").innerHTML = this.responseText;
  }
};

xhr.open("GET", "messages.php", true);
xhr.send();

    }
    
    $('#submit').click(function() {
        
        
        let message = encodeURIComponent($('#msg').val());

        if(message != ""){

        $.ajax({
        url : "add_message.php",
        type : "POST",
        data : "message=" + message
        });
        $('#msg').val(" ");
    }
    
    load();
});

	</script>
</body>
</html>