<?php 
	session_start();

	// $fname = isset($_SESSION['user.fname']) ? $_SESSION['user.fname'] : null;
	// if(isset($fname)) {
	// 	/*
	// 	var_dump($fname);
	// 	$_SESSION['user.fname'] = null;
	// 	die();
	// 	*/
	// }else{
		
	// }

	require './bin/php/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/user.css" type="text/css">
	<title>DesignDevelop</title>
</head>
<body>
	
	<header>
		<div class="headerName"><h1>DesignDevelop<p><?= isset($fname) ? 'Bienvenue '.$fname : ''; ?></p></h1></div>
		<ul>
			<li id="itemContacts">Contacts<div class="itemContacts" >
				<ul class="button">
					<li class="itemSelected">A propos</li>
					<li class="itemSelected">contact@mail</li>
				</ul>
			</div></li>
			<li id="itemServices">Services<div class="itemServices">
				<ul class="button">
					<li class="itemSelected">Outil</li>
					<li class="itemSelected">Tutoriel</li>
				</ul>
			</div></li>
			<li id="itemProjects">Projets<div class="itemProjects" >
				<ul class="button">
					<li class="itemSelected">Voir les projets</li>
					<li class="itemSelected">Envoyez un projet</li>
				</ul>
			</div></li>
			
			<li id="itemHome">Acceuil<div class="itemHome">
				<ul class="button">
					<li class="itemSelected">Se connecter</li>
					<li class="itemSelected">Ajout PSD</li>
				</ul>
			</div></li>
		</ul>
	</header>

	<nav class="content">
		<h3>Bienvenue sur mon site desgin develop</h3>
		<h1>Vous voulez soumettre un PSD</h1>
		<h3>Nous réaliserons votre PSD sous un certains temps</h3>

		<button id="launch">soumettre</button>
	</nav>

	<script type="text/javascript" src="bin/js/skyWeb.js"></script>
	<script type="text/javascript" src="bin/js/core.js"></script>
</body>
</html>