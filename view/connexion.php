<!-- Page de connexion à l'espace administrateur -->
<?php $title = "Connexion";
$main_title="Jean Forteroche";

ob_start(); ?>
    <div class="container">
        <form method="post" action="index.php?action=admin" >
            <div>
                <label for="username"> Identifiant : </label> <br />
                <input type="text" id="username" name="username" placeholder=" Identifiant" />
            </div>
            <div>
                <label for="password"> Mot de passe : </label> <br />
                <input type="text" id="password" name="password" placeholder=" Mot de passe" /> <br />
            </div>
            <div>
                <br />
                <input type="submit" value="Envoyer" />
            </div>
        </form>
    </div>
    

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>