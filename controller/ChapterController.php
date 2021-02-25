<?php 

require_once('model/chapterManager.php');
require_once('model/commentManager.php');

function listChapter()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapter();

    require('view/chapter.php');
}

function chapter($chapterId)
{
    $chapterManager = new chapterManager();
    $commentManager = new commentManager();

    $chapter = $chapterManager->getChapters($chapterId);
    $comments = $commentManager->getComments($chapterId);

    require('view/reading_page.php');
}


function addChapter($chapterId, $title, $content)
{
    $chapterManager = new chapterManager();

    $newChapter = $chapterManager->createChapter($chapterId, $title, $content);
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

    header('Location: index.php?action=admin');
}
