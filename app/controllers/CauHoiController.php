<?php

namespace larava\controllers;

use larava\core\Controller;

class CauHoiController extends Controller
{
    // action
    public $categories;
    public function getCurrentDateTime() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        return date('Y-m-d H:i:s');
    }
    public function __construct()
    {
        $this->categories = $this->Model('CauHoiModel');
        
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
}
