<?php 
$title = 'Accueil';

require('controller/controller.php');
try 
{
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'bio')
        {
            require('view/bio.php');
        }
        elseif ($_GET['action'] == 'chapter')
        {
            require('view/chapter.php');
        }
        elseif ($_GET['action'] == "contact")
        {
            require('view/contact.php');
        }
        elseif ($_GET['action'] == "connexion")
        {
            require('view/connexion.php');
        }
        elseif ($_GET['action'] == "reading")
        {
            require('view/reading_page.php');
        }
        elseif ($_GET['action'] == "admin")
        {
            require('view/admin.php');
        }
    }
    else
    {
        require('view/front_page_view.php');
    }
}
catch(Exception $e)
{
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}