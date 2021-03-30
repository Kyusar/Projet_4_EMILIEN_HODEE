<?php 

require_once("Manager.php");

class ChapterManager extends Manager 
{
    public function getChapter()
    {
        $db = $this->dbConnect();

        $req = $db->query('SELECT chapter.id, title, content, img_name, img_desc, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS chapter_date
        FROM chapter 
        LEFT JOIN images 
        ON chapter.id = images.img_id_chapter 
        ORDER BY id');

        return $req;
    }

    public function addImage($chapterId, $name, $size, $type, $description, $blob)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('INSERT INTO images(img_id_chapter, img_name, img_size, img_type, img_desc, img_blob) VALUES (?, ?, ?, ?, ?, ?)');
        $newImage = $req->execute(array($chapterId, $name, $size, $type, $description, $blob));

        return $newImage;
    }

    public function getChapters($chapterId)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, title, content FROM chapter  WHERE id = ?');
        $req->execute(array($chapterId));
        $chapter = $req->fetch();

        return $chapter;
    }

    public function createChapter($chapterId, $title, $content)
    {
        
        $db = $this->dbConnect();
        $chapter = $db->prepare('INSERT INTO chapter(id, title, content, date_creation) VALUES(?, ?, ?, NOW())');
        $newChapter = $chapter->execute(array($chapterId, $title, $content));

        return $newChapter;
    }

    public function updateChapter($title, $content, $chapterId)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('UPDATE chapter SET title = ?, content = ? WHERE id = ?');
        $chapter->execute(array($title, $content, $chapterId));

        return $chapter;
    }

    public function chapterExist($Id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM chapter WHERE id = ?');
        $req->execute(array($Id));
        $chapter = $req->fetch();

        return $chapter;
    }

    public function deleteChapter($Id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM chapter, images, comments
        USING chapter 
        LEFT JOIN images ON chapter.id = images.img_id_chapter
        LEFT JOIN comments ON chapter.id = comments.id_comment
        WHERE chapter.id= ?');
        /*$req = $db->prepare('DELETE FROM chapter2 WHERE id = ?');*/
        $req->execute(array($Id));
        
        return $req;        
    }
}