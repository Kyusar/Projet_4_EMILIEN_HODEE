<!-- Page de sélection des chapitres -->
<?php $title="Sélection du chapitre";
$main_title="Sélection du chapitre";

ob_start(); ?>
        <div class="card-deck">
            <?php
            while ($donnees = $chapters->fetch())
            {
                if ($donnees['id'] === 3 )
                {
                ?>
                    <br />
                <?php
                }
            ?>
                    <div class="card text-white bg-dark border-secondary">
                        <img class="card-img-top" src="public/images/lac_glacier.jpg" alt="lac_glaicer_alaska" >
                        <div class="card-body">
                            <h5 class="card-title"> Chapitre <?php echo($donnees['id'])?> </h5>
                            <p class="card-text"> <?php echo htmlspecialchars($donnees['title']) ?> </p>
                            <a href="index.php?id=<?= $donnees['id'] ?>&action=reading" class="btn btn-primary"> Lire </a>
                        </div>
                    </div>
            <?php
                
            }
            $chapters->closeCursor();
            ?>
        </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>