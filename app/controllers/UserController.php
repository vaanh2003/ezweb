<?php

namespace larava\controllers;

use larava\core\Controller;
use PDO;

class UserController extends Controller
{
    public $categories;
    public $khoaHoc;
    public $historyKhoaHoc;
    public function __construct()
    {
        $this->khoaHoc = $this->Model('KhoaHocModel');
        $this->historyKhoaHoc = $this->Model('HistoryKHModel');
        $this->categories = $this->Model('UserModel');
    }
    public function index()
    {
        $ketqua =
            $this->khoaHoc::select('khoa_hoc.name', 'khoa_hoc.mo_ta', 'khoa_hoc.img', 'khoa_hoc.id')
            ->from('khoa_hoc')
            ->join('history_khoa_hoc', 'khoa_hoc.id', '=', 'history_khoa_hoc.khoa_hoc_id')
            ->join('user', 'history_khoa_hoc.user_id', '=', 'user.id')
            ->where('user.id', '=', $_SESSION['username']['id'])
            ->get();

        // echo "<pre>aa";
        // print_r($ketqua);
        // echo "bb</pre>";
        $this->View("user/index", $ketqua);
    }
    // public function daThamGia()
    // {
    //     echo "<pre>aa";
    //     // print_r($ketqua);
    //     echo "bb</pre>";
    //     // $ketqua = $this->khoahoc::table('khoa_hoc')
    //     //     ->join('history_khoa_hoc', 'khoa_hoc' . '.id', '=', 'history_khoa_hoc' . '.khoa_hoc_id')
    //     //     ->join('user', 'history_khoa_hoc' . '.user_id', '=', 'user' . '.id')
    //     //     ->where('user.id', '=', $_SESSION['username']['id'])
    //     //     ->select('khoa_hoc' . '.name', 'khoa_hoc' . '.mota', 'user' . '.img')
    //     //     ->get();

    //     return  $this->View("khoahoc/index");
    // }
}
