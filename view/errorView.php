<?php $title = 'Affichage d\'erreur';

ob_start(); ?>

<h1> Une erreur est survenu lors de l'exécution du script </h1>
<p> L'exception attrapé est défini par le logiciel comme : <br /><br />

<strong><?= $errorMessage; ?></strong>
</p>
<a href="index.php"> <input type="button" id="button" value="Revenir à l'acceuil"/> </a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>