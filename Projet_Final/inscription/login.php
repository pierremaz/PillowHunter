<?php  
	
	require('Projet_Final/includes/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link href="Projet_Final/style/formulaire.css" rel="stylesheet"/>
</head>
<body>
	<?php
	require('config.php');


		if (isset($_POST['username'])){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($connexion, $username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($connexion, $password);
		    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
			$result = mysqli_query($connexion,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);

			if($rows==1){
		  	 $_SESSION['username'] = $username;
		    	header("Location:Projet_Final/home.php");


			}else{
				$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
			}
		}
	?>

	<div class="form">
		<h1 class="box-title">Connexion</h1>

		<form class="box" action="" method="post" name="login">
			<div class="section">Nom D'utilisateur: </div>
				<div class="border">
					<label></label>
					<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
			<input type="password" class="box-input" name="password" placeholder="Mot de passe">
			<input type="submit" value="Connexion " name="submit" class="box-button">
			<p class="box-register">Vous êtes nouveau ici? <a href="Projet_Final/inscription/register.php">S'inscrire</a></p>
			<?php if (! empty($message)) { ?>
			    <p class="errorMessage"><?php echo $message; ?></p>
			<?php } ?>
		</form>
</body>
</html>