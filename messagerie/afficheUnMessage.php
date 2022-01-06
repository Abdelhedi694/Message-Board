<?php

require_once "logique.php";
if (isset($_GET["showMessage"])) { ?>

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

<hr>
<h3 style='color:teal'><?= $message['auteur'] ?> :</h3>

            <?php if ($updateMode) { ?>
                
                <form action="modifier.php" method="post">
                <textarea name="messageModifie" cols="30" rows="10"><?= $message['description'] ?></textarea>
                <button type="submit" name="idModif" value="<?= $message["id"]?>" class="btn btn-success">Enregistrer les modifications</button>

                </form>
            <?php }else{ ?>

            <p><?= $message['description'] ?></p>
            
            <a href="afficheUnMessage.php?showMessage=<?= $message["id"] ?>&modification" class="btn btn-warning">modifier</a>
            <hr>
                <?php } ?>
</body>
</html>

<?php } ?>

