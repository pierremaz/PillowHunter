<?php
	
	session_start();
	
	
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link href="Projet_Final/style/header.css" rel="stylesheet"/>
	<link data-n-head="true" rel="icon" type="image/x-icon" href="/Projet_Final/Photos/logo.png">
</head>
<body>
	<header>
		 <div class="logo"><i class="fa fa-car" aria-hidden="true"></i></div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                <div class="col">

                    <a class="navbar-brand" href="Projet_Final/home.php">LOGO</a>
                    
                </div>

                <div class="col nav justify-content-center">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="./Projet_Final/home.php"> Home </a>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#vehicules.html" id="navbardrop" data-toggle="dropdown"> Play </a>

                            <div class="dropdown-menu"> 

                                <a class="dropdown-item" href="Projet_Final/play_random.php"> Random </a>

                                <a class="dropdown-item" href="Projet_Final/edit_level.php"> Edit Level </a>

                            </div>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Projet_Final/leaderboard.php"> Leaderboard </a>
                        </li>

                    </ul>

                </div>


                <div class="col nav justify-content-end">
                	<div class="bouton">
	                        
	                    <a class=".col-xs-6.col-md-4 btn btn-sm btn-outline-secondary" href="Projet_Final/inscription/login.php">Sign in</a>
	                    <a class=".col-xs-6.col-md-4 btn btn-sm btn-outline-secondary" href="Projet_Final/inscription/logout.php">Sign up</a>
	                    
	                </div>
                </div>
            </nav>
        </div>
	</header>
</body>	
</html>
