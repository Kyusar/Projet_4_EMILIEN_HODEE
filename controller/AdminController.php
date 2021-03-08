<?php 

require_once('model/adminManager.php');
require_once('CommentController.php');

function verifyAccess($username, $password)
{

    $adminManager = new adminManager();
    $access = $adminManager->accessAdminPanel($username);
    $getAccess = $access->fetch();

    if (password_verify($password, $getAccess['pass']) == TRUE)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        signaledComment();
    }
    else
    {
        throw new Exception("Pseudo ou Mot de passe érroné");
    }
     $access->closeCursor();
}

function disconnected()
{
    session_destroy();
    header('Location: index.php');
}