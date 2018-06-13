<?php
require_once "../vendor/autoload.php";
require_once "../config.php";
use views\Route1View;

$v = new Route1View();
$v->printDocument();
