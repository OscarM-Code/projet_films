<?php

// PDO

// try {
//     $library = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'elodiegage', 'fortaleza');
// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
// }


$host = "localhost";
$user = "elodiegage";
$password = "fortaleza";
$dbname = "library";
$charset = "utf8";

//Data Source Name
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;

// Instance PDO
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>