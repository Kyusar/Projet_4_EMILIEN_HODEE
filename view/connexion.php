<!-- Page de connexion à l'espace administrateur -->
<?php $title = "Connexion";
$main_title="Jean Forteroche";

ob_start(); ?>
    <div class="form_container">
        <form action="index.php?action=admin" id="form_connexion" method="post">
            <div>
                <label for="username"> Identifiant : </label>
                <input type="text" id="username" name="username" value="Identifiant" />
            </div>
            <div>
                <label for="password"> Mot de passe : </label>
                <input type="text" id="password" name="password" value="Mot de passe" />
            </div>
            <div>
                <input type="submit" value="Envoyer" />
            </div>
        </form>
    </div>

<?= $content = ob_get_clean(); ?>
<?= require('template.php'); ?>