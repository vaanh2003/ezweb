<?php
namespace larava\controllers;
use larava\core\Controller;
class XoaController extends Controller{
    public $categories;
    public function __construct(){
        $this->categories = $this->Model('CauHoiModel');
    }
    public function index(){
        $idcauhoi=isset($_GET['idcauhoi'])?$_GET['idcauhoi']:"";
        $this->categories::where("id",$idcauhoi)->delete();
        header("location:".base_url."blog");
    }
}