<!DOCTYPE html>

<html>
	<head>
		<title>Acceuil SFAW</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="tramesiteweb.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> 
	</head>
	
	<body>
		<header>
			<h1>Se former au web.ovh<h1>
		</header>
		
		<?php include("menu.php");?>
		
		<div id="main">
			<div id="titre">
				<h2>Bienvenue</h2>
			</div>
				
			<article>
				<p>Ce site est en construction</p>
			</article>
			
		</div>
			<?php
			$monfichier = fopen('compteur.txt', 'r+');
			 
			$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
			$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
			fseek($monfichier, 0); // On remet le curseur au début du fichier
			fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
			 
			fclose($monfichier);
			 
			echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
			?>
		<footer>
		</footer>
	</body>
</html>