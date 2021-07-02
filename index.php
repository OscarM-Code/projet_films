<?php

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
$url = explode('/', $_SERVER['REQUEST_URI']);
}
	 
switch ($url) {
    case $url[2] == '':
    require './vue/index.php';
    break;
    // case $url[2] == 'film' AND !empty($url[3]):
    // echo 'Film numéro '.$url[3];
    // break;
    case $url[2] == 'film':
    require './vue/film.php';
    break;
    default:
    http_response_code(404);
    require './vue/error.php';
    break;
    }