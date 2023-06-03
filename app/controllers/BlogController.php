<?php

namespace larava\controllers;

use larava\core\Controller;

class BlogController extends Controller
{
    //Action
    public function index()
    {
        $this->View("blog/index");
    }
}
