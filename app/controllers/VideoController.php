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
        $list=$this->categories::all();
        $_SESSION["video"]=$this->categories::where("id",$idvd)->get();  
        foreach ($_SESSION["video"] as $key => $layView) {
            $this->categories::where("id",$layView['id'])->update([
                "view"=>$layView['view']+=1
            ]); 
        }   
        $this->View("video/index",$list);
    }
    public function dieuhuong(){
        if(isset($_POST['baitiep'])){
            $idvd=isset($_GET['idvd'])?$_GET['idvd']:"";
            $idvd+=1;
            header("location:/ezweb/video?idvd=".$idvd."");
        }
        if(isset($_POST['baitruoc'])){
            $idvd=isset($_GET['idvd'])?$_GET['idvd']:"";
            $idvd-=1;
            header("location:/ezweb/video?idvd=".$idvd."");
        }

    }
}