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
                        <img class="card-img-top" src="public/images/lac_glacier.jpg" alt="lac_glacier_alaska" >
                        <div class="card-body">
                            <h5 class="card-title"> Chapitre <?php echo($donnees['id'])?> </h5>
                            <p class="card-text"> <?php echo htmlspecialchars($donnees['title']) ?> </p>
                            <a href="index.php?id=<?= $donnees['id'] ?>&action=reading" class="btn btn-primary"> Lire </a>
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