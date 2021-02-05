<!-- Page d'accueil -->
<?php $title = 'Jean forteroche - Un billet pour l\'Alaska';
      $href_acc ='#';
      $href_chapter="view/chapter.php";
      $href_bio="view/bio.php";
      $href_contact="view/contact.php"; 

ob_start(); ?>
    <!-- Front picture -->
    <img class="front_image" src="public/images/lac_glacier.jpg" name="glacier" alt="Glacier">
    
    <div>
        <p> Un billet pour l'Alaska </p>
    </div>

    <div class="resume">
        Lorem Ipsum....
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    