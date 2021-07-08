<?php
require('model.php');


if (isset($_POST['s']) and !empty($_POST['s'])) {

    echo JSON_encode($test);
} else {
    echo 'Erreur';
}
