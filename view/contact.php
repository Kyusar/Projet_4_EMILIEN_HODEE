<!-- Page de ccontact -->
<?php $title = "Formulaire de contact";
        $href_acc ='../index.php';
        $href_chapter="chapter.php";
        $href_bio="bio.php";
        $href_contact="#"; 

ob_start(); ?>
    <div class="form_container">
        <h4> Formulaire de contact </h4>
        <form method="post" action="traitement.php" class="form_contact">
            <div class="form_name">
                <div>
                    <label for="name"> Prénom </label> <br />
                    <input type="text" name="name" id="name" placeholder="Prénom">
                </div>
                <div>
                    <label for="family_name"> Nom </label> <br />
                    <input type="text" name="family_name" id="family_name" placeholder="Nom de famille"> 
                </div>
            </div>
            <div>
                <label for="email"> Adresse e-mail </label>
                <input type="e.mail" name="email" id="email" placeholder="adresse@mail.com" > <br />
            <input type="text" name="message_object" id="message_object" placeholder="Objet du message"> <br />
            <input type="textarea" name="message" id="message"  placeholder="Votre message"> <br />
            <input type="submit" value="Envoyer"> 
        </form>    
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
