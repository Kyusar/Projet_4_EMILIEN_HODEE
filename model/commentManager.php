<?php 
require_once("Manager.php");

class CommentManager extends Manager
{  
    public function getComments($postID)
    {
        $db = $this->dbConnect();

        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id_comment = ?ORBER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_comment, author, comment, ccomment_date) Values(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function getComment($Id)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, author, comment FROM comments WHERE id=?');
        $comment->execute(array($Id));

        return $comment;
    }

    public function modifComment($modifs, $commentId)
    {
        $db = $this->dbConnect();
        $modif = $db->prepare('UPDATE comments SET comment = ? WHERE id = ?');
        $modif->execute(array($modifs, $commentId));

        return $modif;
    }

    public function signaledComment($Id)
    {
        $db = $this->dbConnect();
        $signal = $db->prepare('UPDATE comments SET signaled_commment = TRUE');
        $signal->execute(array($Id));

        return $signal;
    }
}