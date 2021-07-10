<?php

require '../model/model_films_card.php';

$i = "";
if(isset($_GET['name']) && !empty($_GET['name']))
{
    $i = $_GET["name"];
} else {
    $i = "error";
}

$req = getCard($i);

$card = $req->fetch();

require '../vue/film_vue_card.php';

?>