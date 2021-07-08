<?php

require './model/model_index.php';

$i = rand(1, 42);

$req = getMovie($i);

$donnees = $req->fetch();

$rec = getPictures();

$allPic = $rec->fetchAll(PDO::FETCH_ASSOC);

require './vue/index_vue.php';

?>