<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Projet Film</title>
</head>
<body>
    <header>

        <div>
            <img id="logo" src="assets/images/logo.png" alt="image de lune">

            <h1> Project Film </h1>
        </div>
        

<?php

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
$url = explode('/', $_SERVER['REQUEST_URI']);
}
	 
switch ($url) {
    case $url[2] == '':
        require 'controller/index_controller.php';
        break;
    case $url[2] == 'credits':
        require 'controller/about_us_controller.php';
        break;
    case $url[2] == 'film':
        require 'controller/films_controller.php';
        break;
    default:
        http_response_code(404);
        require 'controller/error_controller.php';
        break;
}

?>

<footer>
<p>CECI EST UN FOOTER</p>
</footer>

</body>
</html>


