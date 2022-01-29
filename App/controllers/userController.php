<?php

namespace App\Controllers;

use App\Connection;
use App\Models\User;
use PDO;

class userController
{

    public function index()
    {
        require_once '../App/views/index.php';
    }

    public function register()
    {
        require_once '../App/views/register.php';
    }

    public function postUser() 
    {

        $user = new User();

        $user->postUser($_POST);

        print_r($user);
    }



}