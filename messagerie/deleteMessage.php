<?php

if (isset($_POST["delete"])) {
    require_once "connexionDb.php";
    $id = $_POST['delete'];
    $maRequete = "DELETE FROM messages WHERE id= $id";

        $reponse = mysqli_query($maConnection, $maRequete);
        header('Location: http://localhost/messagerie/index.php');
}



?>