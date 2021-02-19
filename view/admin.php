<!-- Page de gestion des billet -->
<?php $title="Menu de gestion";
$main_title="Jean Forteroche";

ob_start(); ?>
    <div class="container"> 
        <h4> Vous êtes sur la page de gestion du site. Retrouver les différentes commande ci-dessous </h4>
        <div class="row">
            <div class="col-4">
                <a href="index.php?action=createChapter">Créer un billet</a>
            </div>
            <div class="col-4">
                Supprimer un article 
            </div>
            <div class="col-4">
                Modifier un article
            </div>
        </div>
        <div class="comment_manager">
            Voici la liste des commentaires signaler :
            <!-- Boucle appel des commentaire signalé -->
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
