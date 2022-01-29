<?php

namespace App\Models;

use PDO;

class User extends Model
{

    public function postUser()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $string_password = $_POST['password'];

        $password = password_hash($string_password, PASSWORD_BCRYPT);

        $query = "insert into users(name, email, password) values (:name, :email, :password)";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);

        if ($stmt->execute()) {
            return true;
        } else {
            echo 'deu merda';
        }
    }
}
