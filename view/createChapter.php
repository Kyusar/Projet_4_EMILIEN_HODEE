<?php $title="Creation de chapitre";
$main_title="Jean Forteroche";

ob_start(); ?>
  <div class="container main_section">
    <div class="row form_creation">
      <div class="col">
        <form method="post" action="index.php?action=addChapter" id="chapter_creation">
          <div>
            <label for="id"> Numéro du chapitre  </label> <br />
            <input type="number" name="id" id="id" placeholder=" N° du chapitre"/>
          </div> <br />
          <div>
            <label for="title"> Titre du chapitre :</label> <br />
            <input type="text" name="title" placeholder=" Titre du chapitre"/> 
          </div> <br/>
          <textarea name="content" id="content">
            Débuter l'écriture ici.
          </textarea> <br />
          <input type="submit" Value="Creer !" />
        </form>
      </div>
    </div>
  </div>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 600,
      language: "fr_FR",
      skin: "oxide-dark",
      content_css: "dark",
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?> 