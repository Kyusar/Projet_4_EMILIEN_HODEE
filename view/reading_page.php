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
        <div class="row">
            <div class="col chapter-align">
                <h1 class="text-center"> <?= htmlspecialchars($chapter['title']) ?> </h1>
                <p class="lead"> <?= $chapter['content'] ?> </p> 
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 class="border-section"> Liste de commentaires </h4>
                <?php 
                    while ($comment = $comments->fetch())
                    {
                ?>
                        <div class="row text-left">
                            <div class="col border-comment">
                                <strong class="lead text-uppercase"> <?= htmlspecialchars($comment['author']) ?> </strong> <em class="muted"> <?= $comment['comment_date_fr'] ?> </em>
                                <p> <?= nl2br(htmlspecialchars($comment['comment'])) ?> </p>
                                <div class="row text-right">
                                    <div class="col">
                                    <a href="index.php?action=signaledComment&amp;id=<?= $comment['id'] ?>&amp;chapter=<?= $chapter['id'] ?>"><em class="muted"> Signalé ce commentaire</em> </a> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                    $comments->closeCursor();
                ?>
                
                <br /> <br />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 class="border-section"> Ajouter un commentaire </h4>
                <form method="post" action="index.php?action=addComment&amp;id=<?= $chapter['id'] ?>">
                    <div class="form-group">
                        <label for="author">Auteur : </label><br />
                        <input type="text" id="author" name="author" placeholder="Pseudo" />
                    </div>
                    <div class="form-group">
                        <label for="comment">Commentaire :</label><br />
                        <textarea name="comment" id="comment"  placeholder=" Votre message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>   