<?php
function connectBDD(){
    // Création du DSN

    $dsn = 'mysql:host=localhost;dbname=ptut;port=3306;charset=utf8';

    // Création et test de la connexion

    try {
        
        $pdo = new PDO($dsn, 'root' , '');

        }
            catch (PDOException $exception) {
            
            mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
            exit('Erreur de connexion à la base de données');
            
        }
    }
function deconnectBDD(){
    // et maintenant, fermez-la !
    $pdo = null;
}
?>


        <!-- CONNEXION BDD -->
            <?php 
			// include ('connectbdd.php');
			// connectBDD();
			?>
		<!-- FIN -->

        <!-- DECONNEXION BDD -->
        <?php 
			// include ('connectbdd.php');
			// deconnectBDD();
			?>
		<!-- FIN -->