<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$pet = Base::instance();

$pet->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

$pet->run();