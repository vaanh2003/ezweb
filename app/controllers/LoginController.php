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
    public function getLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $check = $this->user::where('email', $email)->where('password', $password)->first();
            if ($check) {
                $userinfo = $check->getAttributes();
                $_SESSION['email'] = $userinfo['email']; // Lưu email vào SESSION
                $_SESSION['username'] = $userinfo;
                var_dump($_SESSION['username']); // Lưu username vào SESSION
                header("location: home"); // Chuyển hướng đến trang home.php
                exit();
            } else {
                $_SESSION['message'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
                header('location: login'); // Chuyển hướng đến trang login.php
                exit();
            }
        }
    }
    public function logout()
    {
        unset($_SESSION['username']);
        header('location:home');
    }
}