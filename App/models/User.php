<?php
namespace App\Models;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;


    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function createUser()
    {
        $query = "insert into users(name, email, password) values (:name, :email, :password)";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));

        $stmt->execute();

        return $this;
    }
}