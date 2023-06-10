<?php
namespace larava\controllers;
use larava\core\Controller;
class UserController extends Controller{
    public $categories;
    public function __construct(){
        $this->categories = $this->Model('UserModel');
    }
    public function index(){
        $iduser=isset($_GET['iduser'])?$_GET['iduser']:"";
        $list=$this->categories::where("id",$iduser)->get();
        var_dump($list);
        $this->View("user/index",$list);
        
    }
}