<?php 
include_once __DIR__."/../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'ezweb',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->bootEloquent();
const base_url="http://localhost/ezweb/"; //http://shop.com
include_once "routes.php";
?>