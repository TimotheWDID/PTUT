<?php
$auth = false; // On part du principe que l'utilisateur n'est pas authentifié

if (isset($_POST['ok']) && isset($_POST['email']) && isset($_POST['mdp'])) {
    $username = $_POST['email'];
    $password = $_POST['mdp'];
    // On lit le fichier entier dans la variable $file_contents
    $filename = 'ident.txt';
    $fp = fopen( $filename, 'r' );
    $file_contents = fread( $fp, filesize( $filename ) );
    fclose( $fp );
    // On met chaque ligne du fichier dans un tableau
    $lines = explode ( "\n", $file_contents );
    // On sépare chacune des lignes en paire login-mot de passe et on regarde si elle correspond à $login et $pass.
    foreach ( $lines as $line ) {
        list( $username, $password ) = explode( ';;', $line );
        if ( ( $username == $login ) && ( $password == $pass ) ) {
            // On trouve une correspondance, l'utilisateur est identifié
            // On arrête la recherche
            $auth = true;
            break;
        }
    }
    if ( ! $auth ) {
        echo 'Vous ne pouvez pas accéder à cette page';
        exit;
        }
        else {
            echo 'Bienvenue sur la page administration du site';
        }
}

?>