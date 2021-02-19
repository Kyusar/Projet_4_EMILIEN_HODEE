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
            listChapter();
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
            if(isset($_GET['id']) && $_GET['id'] > 0)
            {
                chapter();
            }
            else
            {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
                
        }
        elseif ($_GET['action'] == "createChapter")
        {
            require('view/createChapter.php');
        }
        elseif ($_GET['action'] == "addChapter")
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                if(!empty($_POST['title']) && !empty($_POST['content']))
                {
                    addChapter($_GET['id'], $_POST['title'], $_POST['content']);
                }
                else
                {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else
            {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
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