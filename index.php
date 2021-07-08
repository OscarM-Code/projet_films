<?php
$host = '127.0.0.1';
$db   = 'library';
$user = 'elodiegage';
$pass = 'fortaleza';
$port = "3306";
$charset = 'utf8';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

var_dump($pdo);

// $url = '';
// if(isset($_SERVER['REQUEST_URI'])){
// $url = explode('/', $_SERVER['REQUEST_URI']);
// }
	 
// switch ($url) {
//     case $url[2] == '':
//         require './controller/index.php';
//         break;
//     case $url[2] == 'about_us':
//         require './controller/about_us.php';
//         break;
//     case $url[2] == 'film':
//         require './controller/films.php';
//         break;
//     default:
//         http_response_code(404);
//         require './controller/error.php';
//         break;
//     }

?>


