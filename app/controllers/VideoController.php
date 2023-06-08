<?php
namespace larava\controllers;
use larava\core\Controller;
class VideoController extends Controller{
    public $categories; 
    public $video;
    public $idvd; 
    public function __construct(){
        $this->categories=$this->Model('VideoModel');
    }

    public function index(){
        $idvd=isset($_GET['idvd'])?$_GET['idvd']:"";

        $videoone=isset($_GET['id'])?$_GET['id']:"";
        $list=$this->categories::where("khoa_hoc_id",$idvd)->get();
        $_SESSION["idkhoahoc"]=$idvd;
        $_SESSION["video"]=$this->categories::where("id",$videoone)->get(); 
        foreach ($_SESSION["video"] as $key => $layView) {
            $this->categories::where("id",$layView['id'])->update([
                "view"=>$layView['view']+=1
            ]); 
        }   
        $this->View("video/index",$list);
    }
    public function dieuhuong(){
        if(isset($_POST['baitiep'])){
            $idvd=isset($_POST['idvd'])?$_POST['idvd']:"";
            $idkhoahoc=isset($_POST['idkhoahoc'])?$_POST['idkhoahoc']:"";
            $idvd+=1;
            header("location:/ezweb/video?idvd=".$idkhoahoc."&id=".$idvd."");
        }
        if(isset($_POST['baitruoc'])){
            $idvd=isset($_POST['idvd'])?$_POST['idvd']:"";
            $idkhoahoc=isset($_POST['idkhoahoc'])?$_POST['idkhoahoc']:"";
            $idvd-=1;
            header("location:/ezweb/video?idvd=".$idkhoahoc."&id=".$idvd."");
        }

    }
}