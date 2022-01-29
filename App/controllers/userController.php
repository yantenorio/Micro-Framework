<?php

namespace App\Controllers;

class userController
{

    public function index()
    {
        $data = [];
        require_once '../App/views/index.html';
    }

    public function register()
    {
        require_once '../App/views/register.html';
    }

    public function postUser()
    {
        echo 'post user';
    }

}