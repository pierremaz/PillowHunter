<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: Projet_Final/inscription/login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link href="Projet_Final/style/login.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<a href="Projet_Final/inscription/logout.php">Déconnexion</a>
		</div>
	</body>
</html>