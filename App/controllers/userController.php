<?php

namespace App\Controllers;

use App\Connection;
use App\Models\User;
use PDO;

class userController
{

    public function index()
    {
        require_once '../App/views/index.html';
    }

    public function register()
    {
        require_once '../App/views/register.php';
    }

    public function postUser() 
    {
        print_r($_POST);

        $conn = Connection::getDB();

        $user = new User($conn);

        $user->__set('name', $_POST['name']);
        $user->__set('email', $_POST['email']);
        $user->__set('password', $_POST['password']);

        print_r($user);
    }



}