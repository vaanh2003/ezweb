<?php 
use larava\core\Router;
use larava\controllers\AboutController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;
use larava\controllers\VideoController;

$router=new Router;

$router->get("/",function(){
    echo "Trang Chủ";
});

$router->get("/about",[AboutController::class,"index"]);

$router->get("/video",[VideoController::class,"index"]);
$router->post("/video",[VideoController::class,"dieuhuong"]);

$router->get("/contact",[ContactController::class,"form"]);

$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delCate"]);

$router->get("/editcate",[CategoryController::class,"editCate"]);
$router->post("/editcate",[CategoryController::class,"updateCate"]);

$router->post("/contact",function(){
    echo "Trang Liên Hệ POST";
});

$router->run();

?>