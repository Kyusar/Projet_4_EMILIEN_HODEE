<?php $title="Modification de chapitre";
$main_title="Modification de chapitre";

ob_start(); ?>
  <div class="container main_section">
    <div class="row form_creation">
      <div class="col">
        <form method="post" action="index.php?action=modifiedChapter" id="chapter_creation">
          <div>
            <label for="id"> Numéro du chapitre  </label> <br />
            <input type="number" name="id" id="id" value="<?= $chapter['id'] ?>"/>
          </div> <br />
          <div>
            <label for="title"> Titre du chapitre :</label> <br />
            <input type="text" name="title" id="title" Value=" <?= htmlspecialchars($chapter['title']) ?>"/> 
          </div> <br/>
          <textarea name="content" id="content">
            <?= nl2br(htmlspecialchars($chapter['content'])) ?>
          </textarea> <br />
          <input type="submit" Value="Modifier" />
        </form>
      </div>
    </div>
  </div>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 600,
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?> 