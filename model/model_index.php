<?php

function getMovies()
{
    require 'access.php';
	try
	{
	    $bdd = new PDO($dsn, $username, $password);
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
    
    $req = $bdd->query('SELECT * FROM `films` ');

    return $req;
	
}
?>