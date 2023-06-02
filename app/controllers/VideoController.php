<?php
namespace larava\controllers;
use larava\core\Controller;
class VideoController extends Controller{
    public function __construct(){
        $this->categories=$this->Model('VideoModel');
    }

    public function index(){        
        $list=$this->categories::all();       
        $this->View("video/index",$list);
    }
}