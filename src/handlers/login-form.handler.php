<?php


// on vérifie que l'utilisateur a écrit qqch dans le champs email et dans le champs password
if ( isset( $_POST["email"] ) && isset( $_POST["password"] ) ) {

    // vu qu'il peut y avoir un bogue, je préfère utilise un bloc try and catch pour capturer l'erreur
    try {
        /* 
            je stocke dans des variables les valeurs 
            entrées par l'utilisateur mais après avoir été assainies 
        */
        $email = htmlspecialchars( $_POST["email"] , ENT_QUOTES);
        $password = htmlspecialchars( $_POST["password"] );

        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            header('Location:../index.php');
            exit(1);
        }
       

    } catch (Exception $e) {
        die($e);
    }
 
} 











