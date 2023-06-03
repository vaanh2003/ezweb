<?php

namespace larava\controllers;

use larava\core\Controller;

class HomeController extends Controller
{
    // action
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('KhoaHocModel');
    }
    public function index()
    {
        $list = $this->categories::all();
        $this->View("home/index", $list);
    }
}
