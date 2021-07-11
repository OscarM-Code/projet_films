<?php

include "./model/model_index.php";

$i = "";

$i = rand(1, 42);


$req = getMovie($i);

$donnees = $req->fetch();

$rec = getPictures();

$allPic = $rec->fetchAll(PDO::FETCH_ASSOC);

include "./vue/index_vue.php";

?>