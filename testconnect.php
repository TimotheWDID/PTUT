<?php 
    function testconnect(){
        session_start();
        if (!isset($_SESSION['nom']) && !isset($_SESSION['mdp'])) {
            header('Location: Index.php'); 
        }
    }
        
        ?>


        <!-- TEST DE CONNEXION -->
		<?php 
			// include ('testconnect.php');
			// testconnect();
			?>
		<!-- FIN TEST CONNEXION -->