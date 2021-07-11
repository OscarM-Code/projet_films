<?php

require './model/model_films.php';

$req = getList();

$list = $req->fetchAll(PDO::FETCH_ASSOC);

require './vue/film_vue.php';

?>