<?php
declare(strict_types=1);

//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/dashboardController.php';
require 'Controller/loginController.php';
require 'Controller/registerController.php';
require 'Controller/becodersController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}else if (isset($_GET['page']) && $_GET['page'] === 'dashboard') {
    $controller = new dashboardController();
}else if (isset($_GET['page']) && $_GET['page'] === 'login') {
    $controller = new loginController();
}else if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $controller = new registerController();
}else if (isset($_GET['page']) && $_GET['page'] === 'becoders') {
    $controller = new becodersController();
}

$controller->render($_GET, $_POST);







