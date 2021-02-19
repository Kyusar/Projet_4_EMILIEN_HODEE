<!-- Page de sélection des chapitres -->
<?php $title="Selection du chapitre";
$main_title="Jean Forteroche";

ob_start(); ?>
        <div class="card-deck">
            <?php
            while ($donnees = $chapters->fetch())
            {
            ?>
                <div class="card text-white bg-dark border-secondary">
                    <img class="card-img-top" src="public/images/lac_glacier.jpg" alt="lac_glaicer_alaska" >
                    <div class="card-body">
                        <h5 class="card-title"> Chapitre <?php echo($donnees['id'])?> </h5>
                        <p class="card-text"> <?php echo htmlspecialchars($donnees['title']) ?> </p>
                        <a href="index.php?id=<?= $donnees['id'] ?>&action=reading" class="card-link"> Lire </a>
                    </div>
                </div>
            <br />
            <?php
            }
            $chapters->closeCursor();
            ?>
        </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>