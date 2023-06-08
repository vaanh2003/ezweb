<?php

use larava\core\Router;
use larava\controllers\HomeController;
use larava\controllers\KhoaHocController;
use larava\controllers\AboutController;
use larava\controllers\BlogController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;
use larava\controllers\VideoController;
use larava\controllers\CauHoiController;

$router = new Router;

$router->get("/", [HomeController::class, "index"]);
$router->get("/home", [HomeController::class, "index"]);
$router->get("/about", [AboutController::class, "index"]);
$router->get("/blog", [BlogController::class, "index"]);

$router->get("/cauhoi", [CauHoiController::class, "index"]);
$router->post("/cauhoi", [CauHoiController::class, "upcauhoi"]);

$router->get("/khoahoc", [KhoaHocController::class, "index"]);
$router->get("/ttkhoahoc", [KhoaHocController::class, "ttkhoahoc"]);

$router->get("/video", [VideoController::class, "index"]);
$router->post("/video", [VideoController::class, "dieuhuong"]);

$router->get("/contact", [ContactController::class, "form"]);

$router->get("/category", [CategoryController::class, "index"]);
$router->post("/category", [CategoryController::class, "addCate"]);
$router->get("/delcate", [CategoryController::class, "delCate"]);

$router->get("/editcate", [CategoryController::class, "editCate"]);
$router->post("/editcate", [CategoryController::class, "updateCate"]);

$router->post("/contact", function () {
    echo "Trang Liên Hệ POST";
});

$router->run();
