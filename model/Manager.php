<?php 

class Manager
{
    protected function dbConnect()
        {
            $db = new PDO('mysql:host=localhost;dbname=p4_emilien_hodee;charset=utf8', 'root', '');
            return $db;
        }
}