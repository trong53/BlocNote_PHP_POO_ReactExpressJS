<?php

require 'helper.php';
require './controllers/HomeController.php';
require './controllers/PostController.php';
require './controllers/AddPostController.php';
require './controllers/ErrorController.php';

switch (getUri()) {

    case '/':                       
        $home = new HomeController();
        $home->index();
        break;

    case '/post':
        $post = new PostController();
        $post->index();
        break;
    
    case '/addpost':
        $add_post = new AddPostController();
        $add_post->index();
        break;

    default:
        $error = new ErrorController();
        $error->index();
        break;
};

