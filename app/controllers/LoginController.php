<?php

namespace larava\controllers;

use larava\core\Controller;

class LoginController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->user = $this->Model('UserModel');
    }
    public function login()
    {
        $this->View("login/login");
    }
    public function getlogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check = $this->user::where('email', $email)->where('password', $password)->first();
        if ($check) {
            $userinfo = $check->getAttributes();
            $_SESSION['email'];
            $_SESSION['username'] = $userinfo;
            var_dump($_SESSION['username']);
            header("location:home");
        } else {
            $_SESSION['message'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
            header('location:login');
        }
    }
    public function logout()
    {
        unset($_SESSION['username']);
        header('location:home');
    }
}