<?php
namespace larava\controllers;
use larava\core\Controller;
class VideoController extends Controller{
    public $categories; 
    public $video;
    public $idvd;
    public $a;
    public $b; 
    public function __construct(){
        $this->categories=$this->Model('VideoModel');
    }

    public function index(){
        $idvd=isset($_GET['idkhoahoc'])?$_GET['idkhoahoc']:"";
        $videoone=isset($_GET['idvd'])?$_GET['idvd']:"";
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
        $a=0;
        $b=0;
        if(isset($_POST['baitiep'])){
            $idvd=isset($_POST['idvd'])?$_POST['idvd']:"";
            $idkhoahoc=isset($_POST['idkhoahoc'])?$_POST['idkhoahoc']:"";
            $idvd+=1;
            $listvideo=$this->categories::where("khoa_hoc_id",$idkhoahoc)->get();
            foreach ($listvideo as $key => $value) {
                if($value['id']==$idvd){
                    $a=1;
                }
            }
            if($a==1){
                header("location:".base_url."video?idkhoahoc=".$idkhoahoc."&idvd=".$idvd."");
            }else{
                $idvd=$idvd-1;
                header("location:".base_url."video?idkhoahoc=".$idkhoahoc."&idvd=".$idvd."");
            }

            
        }
        if(isset($_POST['baitruoc'])){
            $idvd=isset($_POST['idvd'])?$_POST['idvd']:"";
            $idkhoahoc=isset($_POST['idkhoahoc'])?$_POST['idkhoahoc']:"";
            $idvd-=1;
            $listvideo=$this->categories::where("khoa_hoc_id",$idkhoahoc)->get();
            foreach ($listvideo as $key => $value) {
                if($value['id']==$idvd){
                    $a=1;
                }
            }
            if($a==1){
                var_dump('aaaa');
                header("location:".base_url."video?idkhoahoc=".$idkhoahoc."&idvd=".$idvd."");
            }else{
                $idvd=$idvd+1;
                header("location:".base_url."video?idkhoahoc=".$idkhoahoc."&idvd=".$idvd."");
            }
        }

    }
}