<?php

namespace larava\controllers;

use larava\core\Controller;

class KhoaHocController extends Controller
{
    // action
    public $video;
    public $categories;
    public $khoahoc;
    public $a;
    public $list = array();
    public function __construct()
    {
        $this->video = $this->Model('VideoModel');
        $this->categories = $this->Model('KhoaHocModel');
        $this->khoahoc = $this->Model('HistoryKHModel');
    }
    public function getCurrentDateTime()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        return date('Y-m-d H:i:s');
    }
    public function index()
    {
        $list = $this->categories::all();
        $this->View("khoahoc/index", $list);
    }
    public function ttkhoahoc()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") {
            $cate = $this->categories::where("id", $id)->get();
            $list = $cate->toArray();

            $listvideo = $this->video::where("khoa_hoc_id",  $id)->get();
            $count = $listvideo->count();

            $History = $this->khoahoc::all();
            $listHistory = $History->toArray();
            // echo "<pre>";
            // print_r($listHistory);
            // echo "</pre>";
            array_push($list, $count, $listHistory);
        }
        $this->View("khoahoc/ttkhoahoc", $list);
    }
    public function dangky()
    {
        $a = 0;
        $ngaygio = $this->getCurrentDateTime();
        if ((isset($_SESSION['username'])) && $_SESSION['username'] != []) {
            $idkhoahoc = isset($_POST['idkhoahoc']) ? $_POST['idkhoahoc'] : "";
            $listHistory = $this->khoahoc::where("user_id", $_SESSION['username']['id'])->get();
            foreach ($listHistory as $key => $value) {
                if ($idkhoahoc == $value['khoa_hoc_id']) {
                    $a = 1;
                }
            }
            if ($a == 0) {
                $this->khoahoc::create([
                    'khoa_hoc_id' => $idkhoahoc,
                    'user_id' => $_SESSION['username']['id'],
                    'ngay_gio' => $ngaygio
                ]);
            }
            $cate = $this->video::where("khoa_hoc_id", $idkhoahoc)->first();
            header("location:" . base_url . "video?idkhoahoc=" . $idkhoahoc . "&idvd=" . $cate['id'] . "");
        } else {
            header("location:" . base_url . "login");
        }
        // $cate = $this->video::where("khoa_hoc_id", 2)->get();
        // $count = $cate->count();
        // var_dump($count);
    }
}
