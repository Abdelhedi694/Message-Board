<?php 

require_once "connexionDb.php";
    $id = $_POST["idModif"];
    $messageModifie = $_POST["messageModifie"];
    $maRequete = "UPDATE messages SET description = '$messageModifie' WHERE id='$id'";

        $reponse = mysqli_query($maConnection, $maRequete);
        
    header ('Location: index.php');
    


?>