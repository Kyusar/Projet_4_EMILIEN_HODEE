<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://cdn.tiny.cloud/1/3klpreepms2aw95tlln6oab3q54lze6yxv0dzhop2m74wadg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<link href="public/css/styles.css" rel="stylesheet"/>
		<title><?= $title ?></title>
	</head>

	<body class="text-center">
		<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
			<header class="masthead mr-auto ml-auto mb-auto">
				<div class="inner">
					<h3 class="masthead-brand"><?= $main_title ?></h3>
					<nav class="nav nav-masthead justify-content-center" id="nav_main">
						<a class="nav-link active text-white" href="index.php">Acceuil</a>
						<a class="nav-link text-white" href="index.php?action=bio">Biographie</a>
						<a class="nav-link text-white" href="index.php?action=chapter">Chapitres</a>
						<a class="nav-link text-white" href="index.php?action=contact">Contact</a>
						<?php 
							if (!empty($_SESSION['username']) && !empty($_SESSION['password']))
							{
								?>
								<a class="nav-link text-white" href="index.php?action=admin">Administration</a>
								<a class="nav-link text-white" href="index.php?action=disconnect">Déconnexion</a>
								<?php
							}
							else
							{
								?>
								<a class="nav-link text-white" href="index.php?action=connexion">Connexion</a>
								<?php
							}
								?>
					</nav>
				</div>
			</header>
			
				<?= $content ?>
			
			<footer class="mastfoot mt-auto">
				<div class='inner'>
					<p> Rejoignez-moi sur les réseaux sociaux : <br />
						<a href="#"> <img src="public/images/twitter.png" alt="Twitter" /></a> 
						<a href="#"> <img src="public/images/instagram.png" alt="instagram" /></a>
						<a href="#"> <img src="public/images/facebook.png" alt="facebook" /></a>
					</p>
					<p> Site de Jean Forteroche, by Emilien. </p>
				</div>
			</footer>
		</div>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>