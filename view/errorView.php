<?php $title = 'Affichage d\'erreur';
$main_title="Jean Forteroche";
ob_start(); 
    if ($errorMessage === 'Merci pour votre message je vous répondrais au plus vite !')
    {
        ?>
            <h1> <?= $errorMessage; ?> </h1>
            <a href="index.php?action=chapter"> <input type="button" id="button" value="Revenir à la selection des chapitres" class="fake-btn"/> </a>
        <?php
    }
    else
    {
        ?>
            <h1> Une erreur est survenu lors de l'exécution du script </h1>
            <p> L'exception attrapé est défini par le logiciel comme : <br /><br />
            <strong><?= $errorMessage; ?></strong>
            </p>
            <a href=javascript:history.go(-1)> <input type="button" id="button" value="Revenir à la page précédente"/> </a>

        <?php
    }
?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>