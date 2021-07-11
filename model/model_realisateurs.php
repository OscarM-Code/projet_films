<?php


function getMovies($id)
{
    require 'access.php';
    $req = $bdd->prepare("SELECT realisateur
    FROM realisateurs
    WHERE id = :id
    "
    );
    $req->execute(["id" => $id]);

    return $req;

}
$req = getMovies(5);
$all = $req->fetch();
var_dump ($all);




?>