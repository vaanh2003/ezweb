<?php

use larava\core\Router;
use larava\controllers\HomeController;
use larava\controllers\KhoaHocController;
use larava\controllers\TaiLieuController;
use larava\controllers\AboutController;
use larava\controllers\BlogController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;
use larava\controllers\VideoController;
use larava\controllers\CauHoiController;
use larava\controllers\SuaCauHoiController;
use larava\controllers\XoaController;
use larava\controllers\LoginController;
use larava\controllers\SignupController;
use larava\controllers\UserController;

$router = new Router;

$router->get("/", [HomeController::class, "index"]);
$router->get("/home", [HomeController::class, "index"]);
$router->get("/about", [AboutController::class, "index"]);
$router->get("/blog", [BlogController::class, "index"]);

$router->get("/sua_cau_hoi", [SuaCauHoiController::class, "index"]);
$router->post("/sua_cau_hoi", [SuaCauHoiController::class, "uplai"]);

$router->get("/xoa_cau_hoi", [XoaController::class, "index"]);

$router->get("/user", [UserController::class, "index"]);

$router->get("/cauhoi", [CauHoiController::class, "index"]);
$router->post("/cauhoi", [CauHoiController::class, "upcauhoi"]);

$router->get("/khoahoc", [KhoaHocController::class, "index"]);
$router->get("/ttkhoahoc", [KhoaHocController::class, "ttkhoahoc"]);
$router->post("/ttkhoahoc", [KhoaHocController::class, "dangky"]);

$router->get("/tailieu", [TaiLieuController::class, "index"]);
$router->get("/tttailieu", [TaiLieuController::class, "tttailieu"]);

$router->get("/video", [VideoController::class, "index"]);
$router->post("/video", [VideoController::class, "dieuhuong"]);

$router->get("/contact", [ContactController::class, "form"]);

$router->get("/category", [CategoryController::class, "index"]);
$router->post("/category", [CategoryController::class, "addCate"]);
$router->get("/delcate", [CategoryController::class, "delCate"]);

$router->get("/editcate", [CategoryController::class, "editCate"]);
$router->post("/editcate", [CategoryController::class, "updateCate"]);

$router->get("/login", [LoginController::class, "login"]);
$router->get("/logout", [LoginController::class, "logout"]);
$router->post('/getlogin', [LoginController::class, "getlogin"]);

$router->get("/signup", [SignupController::class, "signup"]);
$router->post("/addUser", [SignupController::class, "addUser"]);

$router->post("/contact", function () {
    echo "Trang Liên Hệ POST";
});

$router->run();