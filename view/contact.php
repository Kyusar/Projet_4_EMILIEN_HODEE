<!-- Page de ccontact -->
<?php $title = "Formulaire de contact";
$main_title="Formulaire de contact";

ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="index.php?action=contact" class="form_contact" id="contact_form">
                    <div class="row">
                        <div class="col-4 offset-2">
                            <label for="name"> Prénom </label> <br />
                            <input type="text" name="name" id="name" placeholder="Prénom">
                        </div>
                    
                        <div class="col-4">
                            <label for="family_name"> Nom </label> <br />
                            <input type="text" name="family_name" id="family_name" placeholder="Nom de famille"> 
                        </div>
                    </div>
                    <div>
                        <label for="email"> Adresse e-mail </label> <br />
                        <input type="e.mail" name="email" id="email" placeholder="adresse@mail.com" > <br />
                        <label for="message_object"> Objet du message </label> <br />
                        <input type="text" name="message_object" id="message_object" placeholder="Objet du message"> <br />
                        <label for="message"> Votre message </label> <br />
                        <textarea name="message" id="message"  form="contact_form" rows="6" cols="33" placeholder="Votre message"> Votre message </textarea> <br /><br /> 
                        <input type="submit" value="Envoyer" class="active"> 
                    </div>
                </form>
            </div>
        </div>

        <!--   -->
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
