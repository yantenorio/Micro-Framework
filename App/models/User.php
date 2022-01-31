<?php

namespace App\Models;

use PDO;
use phpDocumentor\Reflection\Types\Boolean;

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

    public function AuthenticateUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->bindValue(':email', $email);
        $query->execute();

        if (!$query->rowCount()) {
            echo "essa conta não existe";
            return false;
        }

        $data = $query->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $data['password'])) {
            echo 'user logged';
        } else {
            echo 'wrong password or username';
        }
    }
}
