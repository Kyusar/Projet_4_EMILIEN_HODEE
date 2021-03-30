<?php 

require_once('model/chapterManager.php');
require_once('model/commentManager.php');

function listChapter()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapter();
    require('view/chapter.php');
}

function image($chapterId, $file)
{
    $chapterManager = new chapterManager();

    $upload_dir = 'public/images';
    $size_Max = 2500000;
    $incoming_Image = $_FILES['image']['tmp_name'];
    $img_Name = $_FILES['image']['name'];
    $img_desc = $_FILES['image']['name'];
    $img_Type = $_FILES['image']['type'];
    $img_Size = $_FILES['image']['size'];
    
    $newImage = $chapterManager->addImage($chapterId, $img_Name, $img_Size, $img_Type, $img_desc, $incoming_Image);
    if ($newImage === FALSE)
    {
        throw new Exception ('L\'image n\'a pas été upload');
    }
    elseif ($img_Size > $size_Max)
    {
        throw new Exception ('Image trop volumineuse');
    }
    else
    {
        move_uploaded_file($incoming_Image, "$upload_dir/$img_Name");
    }
}

function chapter($chapterId)
{
    $chapterManager = new chapterManager();
    $commentManager = new commentManager();

    $chapter = $chapterManager->getChapters($chapterId);
    $comments = $commentManager->getComments($chapterId);

    require('view/reading_page.php');
}

function addChapter($chapterId, $title, $content, $file)
{
    $chapterManager = new chapterManager();
    
    $newChapter = $chapterManager->createChapter($chapterId, $title, $content);
    image($chapterId, $file);
    if ($newChapter === false)
    {
        throw new Exception('Impossible d\'ajouter le chapitre !'); 
    }
    else
    {
        header('Location: index.php?action=reading&id=' . $chapterId);
    }

}

function chapterModifView()
{
    $chapterManager = new chapterManager();

    $chapter = $chapterManager->getChapters($_POST['id']);
    
    require('view/modifyChapter.php');
    
}

function existingChapter($Id)
{
    $chapterManager = new chapterManager();

    $existingChapter = $chapterManager->chapterExist($_POST['id']);

    if ($existingChapter === false)
    {
        throw new Exception('Ce chapitre n\'existe pas');
        
    }
    else
    {
        chapterModifView();
    }
}

function modifiedChapter($title, $content, $chapterId)
{
    $chapterManager = new chapterManager();

    $changedChapter = $chapterManager->updateChapter($title, $content, $chapterId);

    if ($changedChapter === false)
    {
        throw new Exception('Impossible de modifier le chapitre');
    }
    else
    {
        header('Location: index.php?action=reading&id=' . $chapterId);
    }
}

function deletedChapter($Id)
{
    $chapterManager = new chapterManager();

    $delete = $chapterManager->deleteChapter($Id);
    
    unlink("public/images/Logo_LRG.jpg");

    header('Location: index.php?action=admin');
    
}
