<?php

namespace App\Models;

use PDO;

class User extends Model
{

    public function postUser()
    {
        $query = "insert into users(name, email, password) values (:name, :email, :password)";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

        if($stmt->execute()) {
            return true;
        } else {
            echo 'deu merda'; 
        }

        
    }
}
