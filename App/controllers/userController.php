<?php

namespace App\Controllers;

class userController
{

    public function index()
    {
        require_once '../App/views/index.html';
    }

    public function postUser()
    {
        echo 'post user';
    }
}