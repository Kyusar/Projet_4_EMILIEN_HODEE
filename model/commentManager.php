<?php 
require_once("Manager.php");

class CommentManager extends Manager
{  
    public function getComments($commentId)
    {
        $db = $this->dbConnect();

        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE id_comment = ? ORDER BY comment_date DESC');
        $comments->execute(array($commentId));

        return $comments;
    }

    public function deleteAComment($Id)
    {
        $db = $this->dbConnect();

        $comments = $db->prepare('DELETE FROM comments WHERE id = ?');
        $comments->execute(array($Id));

        return $comments;
    }

    public function postComment($chapterId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_comment, author, comment, comment_date) Values(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($chapterId, $author, $comment));

        return $affectedLines;
    }

    public function getSignaledComment()
    {
        $db = $this->dbConnect();
        $signaledComment = $db->query('SELECT id, author, comment, signaled_comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE signaled_comment IS NOT NULL');

        return $signaledComment;
    }

    public function treatedSignaledComment($Id)
    {
        $db = $this->dbConnect();
        $signal = $db->prepare('UPDATE comments SET signaled_comment = NULL WHERE id = ?');
        $signal->execute(array($Id));

        return $signal;
    }

    public function signalAComment($Id)
    {
        $db = $this->dbConnect();
        $signal = $db->prepare('UPDATE comments SET signaled_comment = 0 WHERE id = ?');
        $signal->execute(array($Id));

        return $signal;
    }
}