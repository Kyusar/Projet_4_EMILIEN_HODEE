<?php 

require_once('model/chapterManager.php');
require_once('model/commentManager.php');

function listChapter()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapter();

    require('view/chapter.php');
}

function chapter()
{
    $chapterManager = new chapterManager();

    $chapter = $chapterManager->getChapters($_GET['id']);

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
/*
function modifComment($title, $content, $chapterId)
{
    $chapterModif = new chapterManager();

    $modif = $chapterModif->modifyChapter($title, $content, $chapterId);

    if ($modif === false)
    {
        throw new Exception('Impossible de modifier le chapitre !');
    }
    else
    {
        header('Location : index.php?action=reading&id=' . $chapterId);
    }
}*/