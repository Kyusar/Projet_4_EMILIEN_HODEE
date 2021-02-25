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
            <div class="card-deck" id="card_admin" style="width: 100%;">
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Créer un nouveau chapitre</h5>
                        <a href="index.php?action=createChapter" class="btn btn-primary">Go !</a>
                    </div>
                </div>
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Supprimer un chapitre </h5>
                        <form method="post" action="index.php?action=deleteChapter">
                            <label for="id"> Chapitre à supprimer : </label> <br />
                            <input type="number" name="id" id="id" placeholder=" N° du chapitre" /> <br />
                            <input type="submit" class="btn btn-primary" style="width : 50px;" value="Go !"/>
                        </form>
                    </div>
                </div>
                <div class="card bg-dark border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier un chapitre </h5>
                        <form method="post" action="index.php?action=modifChapter">
                            <label for="id"> Chapitre à modifier : </label> <br />
                            <input type="number" name="id" id="id" placeholder=" N° du chapitre" /> <br />
                            <input type="submit" class="btn btn-primary" style="width : 50px;" value="Go !"/>
                        </form>
                    </div>
                </div>
            </div>
        </div> <br />
        <div class="row">
            <div class="col">
                <h4>Voici la liste des commentaires signaler : </h4>
                <?php 
                    while ($donnees = $signaled->fetch())
                    {
                ?>
                        <div class="row text-left">
                            <div class="col" style="border-top: 1px outset black; padding-top: 10px;">
                                <strong class="lead text-uppercase"> <?= htmlspecialchars($donnees['author']) ?> </strong> <em style="opacity: 50%;"> <?= $donnees['comment_date_fr'] ?> </em>
                                <p> <?= nl2br(htmlspecialchars($donnees['comment'])) ?> </p>
                                <div class="row text-left">
                                    <div class="col">
                                    <a href="index.php?action=deleteComment&amp;id=<?= $donnees['id'] ?>"><strong class="text-uppercase"> Supprimer ce commentaire</strong> </a> - <a href="index.php?action=admin&amp;id=<?= $donnees['id'] ?>"><strong class="text-uppercase"> Enlever le signalement</strong> </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
        
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
