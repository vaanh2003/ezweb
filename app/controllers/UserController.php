<?php

namespace larava\controllers;

use larava\core\Controller;
use PDO;

class UserController extends Controller
{
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('UserModel');
    }
    public function index()
    {
        $this->View("user/index");
    }
}