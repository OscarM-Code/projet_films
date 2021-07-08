<?php
$host = '127.0.0.1';
$db   = 'library';
$user = 'elodiegage';
$pass = 'fortaleza';
$port = "3306";
$charset = 'utf8';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
var_dump($options);
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
var_dump($dsn);
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     foreach ($pdo->query('SELECT * FROM films') as $row){
          print_r($row);
     }
} catch (PDOException $e) {
     print "Erreur !: " . $e->getMessage() . "<br/>";
     die();
}


?>


