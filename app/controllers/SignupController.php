<?php

namespace larava\controllers;

use larava\core\Controller;

class SignupController extends Controller
{
    public $register;
    public function __construct()
    {
        $this->register = $this->Model('SignupModel');
    }
    public function signup()
    {
        $this->View("signup/signup");
    }
    public function addUser()
    {
        $data = array();
        $data['name'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $repass = $_POST['password2'];
        $check =  $this->register::where("name", $data['name'])->where('email', $data['email'])->first();
        if ($check == null) {
            if ($data['password'] == $repass) {
                $_SESSION['message'] = 'Bạn đã đăng ký thành công! Hãy đăng nhập';
                $this->register::insert($data);
                header('location:login');
            } else if ($data['password'] != $repass) {
                $_SESSION['error'] = "Mật khẩu phải giống nhau";
                return $this->View("signup/signup");
            }
        } else {
            $_SESSION['error'] = "Tài khoản này đã tồn tại";
            return $this->View("signup/signup");
        }
    }
}
