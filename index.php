<?php

include 'model.php';
include 'view.php';
include 'controller.php';

$model = new model;
$view = new view;
$webPage = new controller($model, $view);
$webPage->set("Bob",100000); //simulates user data input
$webPage->updateView(); //simulates refresh page data

?>
