<?php

namespace larava\controllers;

use larava\core\Controller;

class BlogController extends Controller{
    public $categories ;
    public $listCauHoi;
    public $thongTinUser ;
    public $data ;
    public $number ;
    public $a;
    public $b;
    public $sonho;
    public $solon;
    public function __construct(){
        $this->categories=$this->Model('CauHoiModel');
        $this->thongTinUser=$this->Model('UserModel');
        $_SESSION['user']=["tranvananh",1];
    }
    public function index()
    {
        $a="";
        $number=[-1,-2,-100,-200,-59];
        $listCauHoi = [];
        $list=$this->categories::all();
        foreach ($list as $key => $value) {
            $i=1;
            $oneUser=$this->thongTinUser::where("id",$value['user_id'])->get();
            foreach ($oneUser as $key => $user) {
                if(empty($listCauHoi)){
                    $data=[$value['id'],$value['user_id'],$value['ten_khoa_hoc'],$value['ngay_gio'],$value['noi_dung'],$value['tra_loi'],$user['name'],$user['img']];
                    array_push($listCauHoi, $data);
                }
                else{
                    $data=[$value['id'],$value['user_id'],$value['ten_khoa_hoc'],$value['ngay_gio'],$value['noi_dung'],$value['tra_loi'],$user['name'],$user['img']];
                    array_push($listCauHoi, $data);
                }

            }
            $i++;
            
        }
        $this->View("blog/index",$listCauHoi);
    }
}
