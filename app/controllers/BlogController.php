<?php

namespace larava\controllers;

use larava\core\Controller;

class BlogController extends Controller{
    public $categories ;

    public function __construct(){
        $this->categories=$this->Model('CauHoiModel');
    }
    public function index()
    {
        $list=$this->categories::all();
        $this->View("blog/index",$list);
    }
}
