<!-- Page de gestion des billet -->
<?php $title="Menu de gestion";
$main_title="Jean Forteroche";

ob_start(); ?>
    <div class="container main_section"> 
        
        <div class="row card-container">
            <div class="col">
                <h4> Vous êtes sur la page de gestion du site. Retrouver les différentes commande ci-dessous </h4>
            </div>
        </div>
        <div class="row">
            <div class="card-deck" style="width: 100%;">
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Créer un nouveau chapitre</h5>
                        <a href="index.php?action=createChapter" class="btn btn-primary">Go !</a>
                    </div>
                </div>
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Supprimer un chapitre </h5>
                        <a href="index.php?action=createChapter" class="btn btn-primary">Go !</a>
                    </div>
                </div>
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier un chapitre </h5>
                        <form method="post" action="index.php?action=modifChapter">
                            <label for="id"> Chapitre à modifier : </label> <br />
                            <input type="number" name="id" id="id" placeholder=" N° du chapitre" />
                            <input type="submit" class="btn btn-primary" value="Go !"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>Voici la liste des commentaires signaler : <!-- Boucle appel des commentaire signalé --> </h4>
            </div>
        </div>
        
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
