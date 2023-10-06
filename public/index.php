<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$controller = isset($_GET['controller'])?$_GET['controller']:'Home';
$action = isset($_GET['action'])?$_GET['action']:'Index';

if($controller=='Home'){
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/controllers/HomeController.php");
    $homeController = new HomeController();
    $homeController->$action();
}
else if($controller=='Admin'){
   require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/controllers/AdminController.php");
   $adminController = new AdminController();
   $adminController->$action();
}
else{
    echo "Khong ton tai URL";
}