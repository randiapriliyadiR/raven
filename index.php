<?php 
// mencantumkan data yang diperlukan
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/setelan/autoload.php';

// membuat inisialisasi router
$router = new \Bramus\Router\Router();

Router::routing($router);

// Jalankan
$router->run();
?>