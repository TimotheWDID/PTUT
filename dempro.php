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
	<body onload="dempro()">
    <!-- TEST DE CONNEXION -->
			<?php 
			include ('testconnect.php');
			testconnect();
			?>
		<!-- FIN TEST CONNEXION -->
    
        <div class="pp">
            
            <div id="dem" onclick="dem()">
            </div>
            <div id="pro" onclick="pro()">
            </div>
            <div id="connex"> 
            </div>
        </div>
        <script src="js/script.js"></script>
		<script>

		</script>
	</body>
</html>