<?php

namespace larava\controllers;

use larava\core\Controller;

class BlogController extends Controller{
    public $categories ;
    public $listCauHoi;
    public $thongTinUser ;
    public function __construct(){
        $this->categories=$this->Model('CauHoiModel');
        $this->thongTinUser=$this->Model('UserModel');
    }
    public function index()
    {
        $list=$this->categories::all();
        foreach ($list as $key => $value) {
            
            $oneUser=$this->thongTinUser::where("id",$value['user_id'])->get();
            foreach ($oneUser as $key => $user) {
                $listCauHoi=[$value['id'],$value['user_id'],$value['ten_khoa_hoc'],$value['ngay_gio'],$value['noi_dung'],$value['tra_loi'],$user['name'],$user['img']];
            }
        }
        
        $this->View("blog/index",$listCauHoi);
    }
}
