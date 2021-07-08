<?php

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
$url = explode('/', $_SERVER['REQUEST_URI']);
}
	 
switch ($url) {
    case $url[2] == '':
        require './controller/index_controller.php';
        break;
    case $url[2] == 'about_us':
        require './controller/about_us_controller.php';
        break;
    case $url[2] == 'film':
        require './controller/films_controller.php';
        break;
    default:
        http_response_code(404);
        require './controller/error_controller.php';
        break;
    }

?>


