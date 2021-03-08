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

function adminSelect($Id)
{
    $commentManager = new commentManager();
    $treatement = $commentManager->treatedSignaledComment($Id);
    $signaled = $commentManager->getSignaledComment();

    if ($_GET['action'] == 'admin')
    {
        require('view/admin.php');
    }
    else
    {
        header('Location: index.php?action=admin');
    }
}