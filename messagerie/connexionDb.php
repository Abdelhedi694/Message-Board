<?php $hote = "localhost";
        $username = "messagesboardadmin";
        $password = 150423;
        $db = "messages_board";

        //mysqli permet de se connecter
        $maConnection = mysqli_connect($hote, $username, $password,$db);

        if (!$maConnection) {   //permet de verifier si il y a eu des erreurs de connexion et de gerer par la suite 
            echo " PROBLEME";
        }
 ?>