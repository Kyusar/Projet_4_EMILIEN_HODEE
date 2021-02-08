<!-- Page biographie -->
<?php $title='Qui suis-je ?';

ob_start(); ?>
    <img class="front_image" src="public/images/paysage.jpg" alt="Paysage" name="paysage">
    <div class="bio_container">
        <div class="bio_text">  
            <h2 class="name_author"> Jean Forteroche </h2>
            <p class="biograph"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="bio_portrait">  
            <img class="bio_portrait" src="public/images/portait.jpg" alt="Jean Forteroche">
        </div>    
    </div>    

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

