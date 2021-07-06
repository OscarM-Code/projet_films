<?php

require './model/model_index.php';

// $id = $_POST[body];

$req = getMovies(1);

require './vue/index_vue.php';

?>