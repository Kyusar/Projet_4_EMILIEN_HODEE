<!-- Page de lecture de chapitre -->
<?php $title="Nom du chapitre";
$main_title="Jean Forteroche";
ob_start(); ?>
    <style>
        html, body {
            height : initial;
        }
    </style>
    <div class="container main_section">
        <h1> <?= htmlspecialchars($chapter['title']) ?> </h1>
        <p id="chapter_align"> <?= nl2br(htmlspecialchars($chapter['content'])) ?> </p> 
    </div>
    <h4> Liste de commentaire </h4>
    

    <form method="post" action="#" id="add_comment">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment" cols="33" rows="6"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>   