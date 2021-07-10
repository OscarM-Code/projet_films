<?php

require '../model/model_films_search.php';

$i = "";
if(isset($_GET['search']) && !empty($_GET['search']))
{
    $i = "%{$_GET["search"]}%";
} else {
    $i = "error";
}

if(empty($_GET['search'])){
    $req = getAllList();
} else {
    $req = getList($i);
}

$list = $req->fetchAll(PDO::FETCH_ASSOC);

$row = $req->rowCount();

if($row > 0){

    foreach ($list as $fullList):

    require '../vue/film_vue_search.php';

    endforeach;
} else {
    require '../vue/error_vue_search.php';
}





?>