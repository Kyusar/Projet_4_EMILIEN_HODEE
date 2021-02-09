<!-- Page d'accueil -->
<?php $title = 'Jean forteroche - Un billet pour l\'Alaska';

ob_start(); ?>
    
    <main role="main" class="inner cover">
		<h1 class="cover-heading">Un billet pour l'Alaska</h1>
		<p class="lead"> Une nouvelle façon de lire </p>
		<p class="lead"><a href="index.php?action=chapter" class="btn btn-lg btn-secondary">Commencer</a></p>
	</main>

    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    