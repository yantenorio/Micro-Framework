<?php
namespace App\Models;
abstract class Model
{
    public function __construct()
    {
        $this->pdo = new \PDO(
            'mysql:host=localhost;dbname=register',
            'root',
            'root'
        );
    }

}