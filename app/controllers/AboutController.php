<?php
namespace larava\controllers;
use larava\core\Controller;
class AboutController extends Controller{
    //Action
    public function index(){
        $data=['content'=>"Đây là nội dung của trang giới thiệu"];
        $this->View("about/index",$data,'admin');
    }
}