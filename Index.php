<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title></title>
        <link rel="stylesheet" href="styles/styletel.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			
		</style>
	</head>
	<body>
    <script src="js/script.js"></script>
<?php
//SUPPRIME SESSION
session_start ();

session_unset ();

session_destroy ();
//############################################################################
//################################CONNEXION###################################
//############################################################################
$auth = false; // On part du principe que l'utilisateur n'est pas authentifié
if (isset($_POST['ok']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
    $login = $_POST['email'];
    $pass = $_POST['mdp'];
    // On lit le fichier entier dans la variable $file_contents
    $filename = 'ident.txt';
    $fp = fopen( $filename, 'r' );
    $file_contents = fread( $fp, filesize( $filename ) );
    fclose( $fp );
    // On met chaque ligne du fichier dans un tableau
    $lines = explode ( "//", $file_contents );
    // On sépare chacune des lignes en paire login-mot de passe et on regarde si elle correspond à $login et $pass.
    foreach ( $lines as $line ) {
        $connect = explode( ';;', $line );
        if ( ( $connect[0] == $login ) && ( $connect[1] == $pass ) ) {
            // On trouve une correspondance, l'utilisateur est identifié
            // On arrête la recherche
            $auth = true;
            break;
        }
    }
}

?>
        <div class="pp">
            <div id="dem" onclick="dem()">
            </div>
            <div id="pro" onclick="pro()">
            </div>
            <div id="connex">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Adresse mail ou numéro de telephone : <br>
                    <input type="text" name="email" id="email"> <br>
                    Mots de passe : <br>
                    <input type="password" name="mdp" id="mdp"> <br>
                    <input type="submit" value="ok" name="ok">
                </form>
                <?php if (!$auth && isset($_POST['ok'])) {
                    echo "Mot de passe ou identifiant invalide";
                }
                ?>    
            </div>
        </div>
        <?php
        //REDIRECTION + VARIABLE DE SESSION
            if ( ! $auth ) {
                }
                else {
                    session_start ();
                    $_SESSION['nom'] = $login; // déclaration variable de session --nom--
                    $_SESSION['mdp'] = $pass; // déclaration variable de session --mdp--
                    header('Location: dempro.php'); 
                    
                }
        ?>

		
		<script>

		</script>
	</body>
</html>