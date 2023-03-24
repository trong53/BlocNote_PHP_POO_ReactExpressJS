<?php

require 'vendor/autoload.php';

function getUri() : string 
{
    return explode("/", $_SERVER['REQUEST_URI'])[0];
}

switch (getUri()) {

    case '/':
        require './controllers/HomeController.php';
        break;

    case '/post':
        require './controllers/PostController.php';
        break;

    case '/addpost':
        require './controllers/AddpostController.php';
        break;

    default:
        require './controllers/ErrorController.php';
        break;
};

