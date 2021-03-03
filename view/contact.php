<!-- Page de contact -->
<?php $title = "Formulaire de contact";
$main_title="Formulaire de contact";

ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="index.php?action=contact">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-2">
                            <label for="name"> Prénom </label> <br />
                            <input type="text" name="name" id="name" placeholder=" Prénom">
                        </div>
                    
                        <div class="col-lg-4">
                            <label for="family_name"> Nom </label> <br />
                            <input type="text" name="family_name" id="family_name" placeholder=" Nom de famille"> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email"> Adresse e-mail </label> <br />
                            <input type="mail" name="email" id="email" placeholder=" adresse@mail.com" > <br />
                            <label for="message_object"> Objet du message </label> <br />
                            <input type="text" name="message_object" id="message_object" placeholder=" Objet du message"> <br />
                            <label for="message"> Votre message </label> <br />
                            <textarea name="message" id="message"  form="contact_form" rows="6" cols="33" placeholder=" Votre message"></textarea> <br /><br /> 
                            <input type="submit" value="Envoyer" class="active"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--   -->
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
