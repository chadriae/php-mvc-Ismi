<?php
<<<<<<< HEAD

=======
>>>>>>> origin/ismi2
declare(strict_types=1);

//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
<<<<<<< HEAD
require 'Controller/DashboardController.php';
require 'Controller/LoginController.php';
require 'Controller/RegisterController.php';
require 'Controller/BecodersController.php';

// Database connections
require_once 'Controller/DatabaseManager.php';
require_once 'config.php';
$databaseManager = new DatabaseManager($config['host'], $config['name'], $config['password'], $config['dbname'], $config['port']);
$databaseManager->connect();
=======
require 'Controller/dashboardController.php';
require 'Controller/loginController.php';
require 'Controller/registerController.php';
require 'Controller/becodersController.php';
>>>>>>> origin/ismi2

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
<<<<<<< HEAD
if (isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController($databaseManager);
    $students = $controller->get();
    require 'View/info.php';
} else if (isset($_GET['page']) && $_GET['page'] === 'dashboard') {
    $controller = new DashboardController($databaseManager);
    $addUser = $controller->createUser();
} else if (isset($_GET['page']) && $_GET['page'] === 'login') {
    $controller = new LoginController();
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $controller = new RegisterController();
} else if (isset($_GET['page']) && $_GET['page'] === 'becoders') {
    $controller = new BecodersController($databaseManager);
}

$controller->render($_GET, $_POST);
=======
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







>>>>>>> origin/ismi2
