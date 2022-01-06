<?php
   
   
        require_once "connexionDb.php";
        

        if (isset($_GET["showMessage"])) {
                $updateMode = false;
                if (isset($_GET["modification"])) {
    
                        $updateMode = true;
    

                }


                $id = htmlspecialchars($_GET['showMessage']);
                $maRequete = "SELECT * FROM messages WHERE id= $id";
                $message = mysqli_query($maConnection, $maRequete);
                $message = $message -> fetch_assoc();


        }else {
            $maRequete = "SELECT * FROM messages";

        $messages = mysqli_query($maConnection, $maRequete);  // mysqli_query recupere les infos , deuxparametres, la connexion et la requete
   
        }


        

?>