<?php

namespace App\Controllers;

use App\Models\Friend;

class HomeController extends AppController
{
    public function index()
    {
        // $friends = Friend::getAll();
        $this->view['friends'] = Friend::getAll();
    }

    public function getById()
    {
        // $friend = Friend::find($_GET['id']);
        $this->view['friend'] = Friend::getAll();
    }
}
