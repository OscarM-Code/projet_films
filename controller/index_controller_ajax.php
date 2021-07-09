<?php
include "../model/model_index_ajax.php";

$i = "";
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $i = $_GET["id"];
} else {
    $i = rand(1, 42);
}

$req = getMovie($i);

$donnees = $req->fetch();


include "../vue/index_vue_ajax.php";

?>