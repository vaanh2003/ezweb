<?php

namespace larava\controllers;

use larava\core\Controller;

class TaiLieuController extends Controller
{
    // action
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('TaiLieuModel');
    }
    public function index()
    {
        $list = $this->categories::all();
        $this->View("tailieu/index", $list);
    }
    public function tttailieu()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") {
            $cate = $this->categories::where("id", $id)->get();
        }
        $this->View("tailieu/tttailieu", $cate);
    }
}
