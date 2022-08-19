<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

         echo view ('Assets/header');   
        echo view  ('homePage');
        echo view ('Assets/footer');
    }
}
