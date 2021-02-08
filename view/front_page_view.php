<!-- Page d'accueil -->
<?php $title = 'Jean forteroche - Un billet pour l\'Alaska';

ob_start(); ?>
    
    <div id="home-header" class="row">
        <div class="col text-center"> 
            <h1 class="main-title"><u> Un billet pour l'alaska </u></h2>
        </div>
    </div> 
    <div class="row">
        <div id="gatcha" class="col text-center">
            Une nouvelle façon de lire
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            Commencer la lecture !
        </div>    
    </div>

    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    