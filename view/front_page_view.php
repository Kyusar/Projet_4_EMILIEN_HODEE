<!-- Page d'accueil -->
<?php $title = 'Jean forteroche - Un billet pour l\'Alaska';
$main_title="Jean Forteroche";

ob_start(); ?>
    
    <main class="inner cover">
		<h1 class="cover-heading main-title">Un billet pour l'Alaska</h1>
		<p class="lead"> Une nouvelle façon de lire </p>
		<p class="lead"><a href="index.php?action=chapter" class="btn btn-lg bg-info text-white">Commencer</a></p>
	</main>

    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    