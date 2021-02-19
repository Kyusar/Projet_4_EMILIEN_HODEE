<?php 

require_once("Manager.php");

class ChapterManager extends Manager 
{
    public function getChapter()
    {
        $db = $this->dbConnect();

        $req = $db->query('SELECT id, title FROM chapter');

        return $req;
    }

    public function readChapter($chapterId)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, title, content FROM chapter WHERE id = ?');
        $req->execute(array($chapterId));
        $chapter = $req->fetch();

        return $chapter;
    }

    public function createChapter($chapterId, $title, $content)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('INSERT INTO chapter(id, title, content, date_creation) VALUES(?, ?, ?, NOW()');
        $newChapter = $chapter->execute(array($chapterId, $title, $content));

        return $newChapter;
    }
}