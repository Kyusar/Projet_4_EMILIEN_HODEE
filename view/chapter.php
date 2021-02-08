<!-- Page de sélection des chapitres -->
<?php $title="Selection du chapitre";

ob_start() ?>
    <h2 class="book_title"> Un billet pour l'alaska </h2>
    <p> Insertion via boucle des image menant aux chapitres </p>
    <a href="index.php?action=reading"> Chapitre 1 </a>
    <!-- ?php
    while ($donnees = $chapter->fetch())
    {
    ?>
        <div class="chapter_container">
            <img class="chapter_background" src="#" alt="#">
            <a href="#">
                <h3 class="title_chapitre"> ?= $donnees['chapitre_id'] ?> </h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </a>
        </div>  
    ?php  
    }
    $chapter->closeCursor();
    ?> -->
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>