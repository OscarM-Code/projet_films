<?php

require './model/model_index.php';

$req = getMovies();

require './vue/index_vue.php';

?>