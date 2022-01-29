<?php
namespace App;

use PDO;
use PDOException;

class Connection 
{
    public static function getDB() 
    {
        try {

            $conn = new PDO("mysql:host=localhost;dbname=register", "root", "root");

            return $conn;

        }catch(PDOException $e) {

        }
    }
}