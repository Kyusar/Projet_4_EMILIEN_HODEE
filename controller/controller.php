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

    $chapter = $chapterManager->readChapter($_GET['id']);

    require('view/reading_page.php');
}

function addChapter($chapterId, $title, $content)
{
    $chapterManager = new chapterManager();

    $newChapter = $commentManager->createChapter($chapterId, $title, $content);

    if ($newChapter === false)
    {
        throw new Exeption('Impossible d\'ajouter le chapitre !');
    }
    else
    {
        header('Location: index.php?action=reading&id=' . $chapterId);
    }
}