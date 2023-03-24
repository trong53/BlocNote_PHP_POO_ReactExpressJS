<?php

class PostController
{
    public $post_model;

    public function __construct(){
        require './models/PostModel.php';
        $this->post_model = new PostModel();
    }

    public function index() {
        if (!empty($_GET['id'])) {
    
            $note_id = $_GET['id'];
            $note = $this->post_model->getNote($note_id);
            require './views/PostView.php';
        }
    }
}


