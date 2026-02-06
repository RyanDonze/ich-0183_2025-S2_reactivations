<?php

namespace App\Controllers;

class HomeController
{
    public function __construct()
    {
        // echo 'Bonjour from Home';
    }

    public function index()
    {
        echo 'Bonjour from Home index';
    }

    public function view()
    {
        echo 'Bonjour from Home view avec l\'id ' . $_GET['id'];
    }
}
