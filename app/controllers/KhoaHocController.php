<?php

namespace larava\controllers;

use larava\core\Controller;

class KhoaHocController extends Controller
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
        $this->View("khoahoc/index", $list);
    }
}
