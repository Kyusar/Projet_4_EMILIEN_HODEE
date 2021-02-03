<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?= $title ?></title>
		<link href="../public/css/style.css" rel="stylesheet"/>

	</head>

	<body>
		<header class="head_fixe">
			<h1 class="main_title"> Jean Forteroche </h1>
			<nav class="head_menu">
				<ul>
					<li> <a href="#acceuil">Acceuil</a></li>
					<li> <a href="#bio">Biographie</a></li>
					<li> <a href="#chapter">Chapitres</a></li>
					<li> <a href="#contact">Contact</a></li>	
				</ul>	
			</nav>
		</header>

		<?= $content ?>

		<footer>
			<div class="social_network">
				<a href="twitter.com"> Twitter(image) </a>
				<a href="facebook.com"> Facebook(image) </a>
				<a href="instagram.com"> Instagram(image) </a>
			</div>
			<br />
			<div class="contact">
				Contact panel
			</div>	
			<br />
			<div class="admin_connexion">
				Connexion admin
			</div>
	</body>
</html>