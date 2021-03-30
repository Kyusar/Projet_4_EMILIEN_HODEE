<!-- Page de sélection des chapitres -->
<?php $title="Sélection du chapitre";
$main_title="Sélection du chapitre";

ob_start(); ?>
    
    <div class="row row-cols-1 row-cols-md-3 card-container">
        <?php
        while ($donnees = $chapters->fetch())
        {
            ?>
                <div class="chapter-block">
                    <div class="card text-white bg-dark2 mb-3 border-secondary">
                        <img class="card-img-top" src="public/images/<?= $donnees['img_name'] ?>" alt="<?= $donnees['img_desc'] ?>" >
                        <div class="card-body">
                            <h4 class="card-title"> <?php echo htmlspecialchars($donnees['title']) ?> </h5>
                            <p class="card-text"> Chapitre <?php echo($donnees['id'])?> </p>
                            <a href="index.php?id=<?= $donnees['id'] ?>&action=reading" class="btn btn-primary"> Lire </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?= $donnees['chapter_date'] ?>
                        </div>
                    </div>
                </div>
                <?php
        }
        $chapters->closeCursor();
        ?>
    </div>
    
        
        

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>