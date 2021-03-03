<?php $title = 'Affichage d\'erreur';
$main_title="Jean Forteroche";
ob_start(); ?>

<h1> Une erreur est survenu lors de l'exécution du script </h1>
<p> L'exception attrapé est défini par le logiciel comme : <br /><br />

<strong><?= $errorMessage; ?></strong>
</p>
<a href=javascript:history.go(-1)> <input type="button" id="button" value="Revenir à la page précédente"/> </a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>