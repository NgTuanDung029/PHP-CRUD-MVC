<?php
$route = isset($_GET['route']) ? $_GET['route'] : 'book';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
if ($route == 'book') {
    include('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->$action();
} else {
    echo "Lỗi";
}
