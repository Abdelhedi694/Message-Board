<?php 
require_once "logique.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg mb-5">
      <a href="index.php" class="navbar-brand">Message Board</a>
</nav>

<form action="http://localhost/messagerie/postMessage.php" method="post" class="formulaire">
    <input type="text" name="auteur" placeholder="Entrez votre nom">
    <textarea name="message" id="" cols="30" rows="10" placeholder="Entrez votre texte"></textarea>
    <input type="submit" id="">
</form>


<div class="container">

        <?php foreach ($messages as $message) { ?>
            <hr>
            <h3 style="color:teal"><?= $message["auteur"] ?> :</h3>
            <p><?= $message["description"] ?></p>
            <form action="deleteMessage.php" method="post">

            <button type="submit" name="delete" class="btn btn-danger" value="<?= $message["id"] ?>"><strong>X</strong></button>

            </form>
            <form action="afficheUnMessage.php" method="get">

            <button type="submit" value="<?= $message["id"] ?>" name="showMessage" class="btn btn-success">Afficher ce message</button>

            </form>
        <hr>
        <?php } ?>
        
</div>


</body>
</html>