<?php

//$site_url = "http://" . $_SERVER['SERVER_NAME']";
$site_uri =  $_SERVER['REQUEST_URI'];


if ($site_uri == '/') {
    $register_page = require_once('views/home.php');
    echo ($register_page);
}

if ($site_uri == '/index') {
    $register_page = require_once('views/index.php');
    echo ($register_page);
}

if ($site_uri == '/register') {
    $register_page = require_once('views/register.php');
    echo ($register_page);
}

if ($site_uri == '/login') {
    $register_page = require_once('views/login.php');
    echo ($register_page);
}
