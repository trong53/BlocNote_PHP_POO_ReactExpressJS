<?php

function getUri() : string
{
    return explode("?", $_SERVER['REQUEST_URI'])[0];
}

// echo getUri();   // si votre URL est http://localhost/blocnote/   , votre URI sera /Blocnote/

switch (getUri()) {

    case '/':                           // Dans ce cas, il faut changer '/'  =>  '/Blocnote/'   . Et donc, modifier tous les liens dans le Routeur
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

