<!-- Page de gestion des billet -->
<?php $title="Menu de gestion";
$main_title="Jean Forteroche";

ob_start(); ?>
    <div class="resume_admin"> 
        Vous êtes sur la page de gestion du site. Retrouver les différentes commande ci-dessous 
    </div>
    <div class="command_container">
        <div class="create_article">
            Créer un billet
        </div>
        <div class="suppr_article">
            Supprimer un article 
        </div>
        <div class="modify_article">
            Modifier un article
        </div>
    </div>
    <div class="comment_manager">
        Voici la liste des commentaires signaler :
        <!-- Boucle appel des commentaire signalé -->
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
