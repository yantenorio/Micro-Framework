<?php

namespace App\Controllers;


use App\Models\User;


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

        echo 'created';
    }

    public function AuthUser() 
    {

        $user = new User();

        $user->authenticateUser($_POST);


    }



}
