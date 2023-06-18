<?php

namespace larava\controllers;

use larava\core\Controller;

class CauHoiController extends Controller
{
    // action
    public $categories;
    public $traloi;
    public $user;
    public function getCurrentDateTime() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        return date('Y-m-d H:i:s');
    }
    public function __construct()
    {
        $this->categories = $this->Model('CauHoiModel');
        $this->user = $this->Model('UserModel');
        $this->traloi = $this->Model('TraLoiModel');
        
    }
    public function index()
    {
        $list = $this->categories::all();
        $this->View("cauhoi/index", $list);
    }
    public function upcauhoi()
    {
        $ngaygio=$this->getCurrentDateTime();
        if(isset($_POST['iduser'])&&$_POST['iduser']!=""){
            $iduser=isset($_GET['iduser'])?$_GET['iduser']:"";
            $noidung=isset($_POST['message'])?$_POST['message']:"";
            $this->categories::create([
                'noi_dung'=>$noidung,
                'user_id' => $iduser,
                'ngay_gio' => $ngaygio,
            ]);
            header("location:".base_url."blog");
        }
    }
    public function binhluan(){
        $listtraloi="";
        $listusertl=[];
        $idch = isset($_GET['idch']) ? $_GET['idch'] : "";
        $listonech=$this->categories::where('id',$idch)->get();
        $arraycauhoi =  $listonech->toArray();
        $username=$this->user::where('id',$arraycauhoi[0]['user_id'])->get();
        $arrayuser= $username->toArray();
        if($listonech[0]['tra_loi']!=0){
            $listtraloi=$this->traloi::where('cau_hoi_id',$idch)->get();
            $arraytraloi = $listtraloi->toArray();
            foreach ($arraytraloi as $key => $value) {
                $usertraloi=$this->user::where('id',$value['user_id'])->get();
                $arrayusertl=$usertraloi->toArray();
                array_push($listusertl,$arrayusertl);
            } 

        }
        if (isset($listtraloi)&&!$listtraloi) {
            array_push($arraycauhoi,$arrayuser);
            $this->View("cauhoi/binhluan", $arraycauhoi);
        } else {
            array_push($arraycauhoi,$arrayuser, $arraytraloi,$listusertl);
            $this->View("cauhoi/binhluan", $arraycauhoi);
           
        }
        
        
    }
    public function pushbinhluan(){
        if(isset($_SESSION['username'])&&$_SESSION['username']!=""){
            $ngaygio=$this->getCurrentDateTime();
            if(isset($_POST['iduser'])&&$_POST['iduser']!=""){
                $iduser=isset($_POST['iduser'])?$_POST['iduser']:"";
                $noidung=isset($_POST['message'])?$_POST['message']:"";
                $idch=isset($_POST['idch'])?$_POST['idch']:"";
                var_dump($iduser);
                $this->traloi::create([
                    'noi_dung'=>$noidung,
                    'user_id' => $iduser,
                    'ngay_gio' => $ngaygio,
                    'cau_hoi_id' => $idch

                ]);
                $listonech=$this->categories::where('id',$idch)->get();
                foreach ($listonech as $key => $value) {
                    $this->categories::where("id",$idch)->update([
                        "tra_loi"=>$value['tra_loi']+1
                    ]);
                }
                header("location:".base_url."binh_luan?idch=".$idch."");
            }
        }
        
    }
}
