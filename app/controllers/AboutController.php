<?php

namespace larava\controllers;

use larava\core\Controller;

class AboutController extends Controller
{
    //Action
    public function index()
    {
        $this->View("about/index");
    }
}
