<?php 

require_once("Manager.php");

class adminManager extends Manager 
{
    public function accessAdminPanel($username)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass FROM user WHERE username = ?');
        $req->execute(array($username));
        
        return $req;
    }
}