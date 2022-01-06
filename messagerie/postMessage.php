<?php


if (isset($_POST["auteur"]) && isset($_POST["message"])) {
    require_once "connexionDb.php";
        $auteur = htmlspecialchars($_POST["auteur"]);
        $description = htmlspecialchars ($_POST["message"]);
    $maRequete = "INSERT INTO messages (auteur, description) VALUES ('$auteur', '$description')";

        $reponse = mysqli_query($maConnection, $maRequete);
        header('Location: http://localhost/messagerie/index.php');
}


?>