<?php

require '../model/model_films_search.php';

$i = "";
if(isset($_GET['search']) && !empty($_GET['search']))
{
    $i = "%{$_GET["search"]}%";
} else {
    $i = "error";
}

$req = getList($i);

$list = $req->fetchAll(PDO::FETCH_ASSOC);

require '../vue/film_vue_search.php';

?>