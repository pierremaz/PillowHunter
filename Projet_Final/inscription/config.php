<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pillow');
 
// Connexion � la base de donn�es MySQL 
$connexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($connexion === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>