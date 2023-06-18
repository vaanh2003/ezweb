<?php
namespace larava\controllers;
use larava\core\Controller;
class XoaController extends Controller{
    public $categories;
    public function __construct(){
        $this->categories = $this->Model('CauHoiModel');
        $this->traloi = $this->Model('TraLoiModel');
    }
    public function index(){
        $idcauhoi=isset($_GET['idcauhoi'])?$_GET['idcauhoi']:"";
        $this->traloi::where("cau_hoi_id",$idcauhoi)->delete();
        $this->categories::where("id",$idcauhoi)->delete();
        header("location:".base_url."blog");
    }
}