<?php

require 'model/model_index.php';

$req = getMovies(5);

$donnees = $req->fetch();

require 'vue/index_vue.php';

?>