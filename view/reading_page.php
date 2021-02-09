<!-- Page de lecture de chapitre -->
<?php $title="Nom du chapitre";
$main_title="Jean Forteroche";
ob_start(); ?>

    <h1 class="chapter title"> Titre du chapitre </h1>
    <div class="text du chapitre"> 
        <p> Long paragraphe  </p>
    </div>

    <div>
        <p> Liste de commentaire </p>
    </div>

    <form method="post" action="#" id="add_comment">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>   