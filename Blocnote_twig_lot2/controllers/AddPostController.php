<?php

$message = '';

if (!empty($_POST['note-form-submit'])) {

    if (!empty($_POST['title'])&&!empty($_POST['description'])) {
        
        $title = $_POST['title'];
        $description = $_POST['description'];
    
        require './models/AddPostModel.php';

        $add_note = false;
        $add_note = createNote($title, $description);
    
        if ($add_note) {
            $message = "Votre note a été enregistrée avec succès";
        }
    }

}

require './controllers/TwigEnvironment.php';
$template = $twig->load('AddPostView.html.twig');
echo $template->render([
    'message' => $message,
]);