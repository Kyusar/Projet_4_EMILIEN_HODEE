<?php 

require_once('model/chapterManager.php');
require_once('model/commentManager.php');

function addComment($chapterId, $author, $comment)
{
    $commentManager = new commentManager();

    $affectedLines = $commentManager->postComment($chapterId, $author, $comment);

    if ($affectedLines === false)
    {
        throw new Exception('Impossible d\'ajouter le commentaire ! ');
    }
    else
    {
        header('Location: index.php?action=reading&id=' . $chapterId);
    }
}

function deleteComment($Id)
{
    $commentManager = new commentManager();
    $deleteComment = $commentManager->deleteAComment($Id);

    header('Location: index.php?action=admin');
}

function signaledComment()
{
    $commentManager = new commentManager();
    $signaled = $commentManager->getSignaledComment();

    require('view/admin.php');
}

function treatedComment($Id)
{
    $commentManager = new commentManager();
    $treatement = $commentManager->treatedSignaledComment($Id);

    header('Location: index.php?action=admin');
}

function signaledAComment($Id)
{
    $commentManager = new commentManager();
    $signaledAComment = $commentManager->signalAComment($Id);

    header('Location: index.php?action=reading&id=' . $_GET['chapter']);
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