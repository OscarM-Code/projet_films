<?php

// PDO

// try {
//     $library = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'elodiegage', 'fortaleza');
// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
// }


// $host = "localhost";
// $user = "elodiegage";
// $password = "fortaleza";
// $dbname = "library";
// $charset = "utf8";
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

//Data Source Name
// $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;

// Instance PDO
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 ?>