<?php
namespace larava\controllers;
use larava\core\Controller;
class SuaCauHoiController extends Controller{
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('CauHoiModel');
    }
    public function index(){
        $idCauHoi = isset($_GET['idcauhoi']) ? $_GET['idcauhoi'] : "";
        $list=$this->categories::where("id",$idCauHoi)->get();
        $this->View("suaCauHoi/index",$list);
    }
    public function uplai(){
        $iduser = isset($_POST['iduser']) ? $_POST['iduser'] : "";
        $noidung = isset($_POST['message']) ? $_POST['message'] : "";
        $idCauHoi = isset($_GET['idcauhoi']) ? $_GET['idcauhoi'] : "";
        $this->categories::where("id",$idCauHoi)->update([
            "noi_dung"=>$noidung
        ]);
        header("location:".base_url."blog");
    }
}