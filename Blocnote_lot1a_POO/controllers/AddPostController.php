<?php

class AddPostController
{
    public $add_post_model;

    public function __construct(){
        require './models/AddPostModel.php';
        $this->add_post_model = new AddPostModel();
    }

    public function index() {
        $message = '';

        if (!empty($_POST['note-form-submit'])) {
            if (!empty($_POST['title'])&&!empty($_POST['description'])) {
                
                $title = $_POST['title'];
                $description = $_POST['description'];
                $add_note = false;
                $add_note =  $this->add_post_model->createNote($title, $description);
            
                if ($add_note) {
                    $message = "Votre note a été enregistrée avec succès";
                }
            }
        }
        require './views/AddpostView.php';
    }
}



