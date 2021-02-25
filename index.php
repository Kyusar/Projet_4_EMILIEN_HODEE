<?php 
$title = 'Accueil';

require('controller/ChapterController.php');
require('controller/CommentController.php');
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
                chapter($_GET['id']);
            }
            else
            {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
                
        }
        elseif ($_GET['action'] == "addComment")
        {
            if(isset($_GET['id']) && $_GET['id'] > 0)
            {
                if(!empty($_POST['author']) && !empty($_POST['comment']))
                {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else
                {
                    throw new Exception('Tous les champs du commentaire ne sont pas remplis !');
                }
            }
            else
            {
                throw new Exception('Ce commentaire n\'est lié à aucun chapitre');
            }
        }
        elseif ($_GET['action'] == "admin")
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                treatedComment($_GET['id']);
            }
            else
            {
                signaledComment();
            }
        }
        elseif ($_GET['action'] == 'signaledComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                signaledAComment($_GET['id']);
            }
            else
            {
                throw new Exception("Aucun commentaire sélectionner");
                
            }
        }
        elseif ($_GET['action'] == 'deleteComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                deleteComment($_GET['id']);
            }
            else
            {
                throw new Exception("Aucun commentaire sélectionner pour suppresion");
            }
        }
        /* Gestion des chapitres */ 

        elseif ($_GET['action'] == "createChapter")
        {
            require('view/createChapter.php');
        }
        elseif ($_GET['action'] == "addChapter")
        {
            if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content']))
            {
                addChapter($_POST['id'], $_POST['title'], $_POST['content']);
            }
            else
            {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == "modifChapter")
        {
            if(isset($_POST['id']) && $_POST['id'] > 0)
            {
                existingChapter($_POST['id']);
            }
            else
            {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
                
        }
        elseif ($_GET['action'] == "modifiedChapter")
        {
            if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content']))
            {
                modifiedChapter($_POST['title'], $_POST['content'], $_POST['id']);
            }
            else
            {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == "deleteChapter")
        {
            if(isset($_POST['id']) && $_POST['id'] > 0)
            {
                deletedChapter($_POST['id']);
            }
            else
            {
                throw new Exception('Veuillez choisir un chapitre valide à supprimer');
            }
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