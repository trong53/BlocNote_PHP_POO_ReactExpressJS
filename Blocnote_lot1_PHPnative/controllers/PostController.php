<?php

if (!empty($_GET['id'])) {
    
    $note_id = $_GET['id'];

    require './models/PostModel.php';

    $note = getNote($note_id);
}

require './views/PostView.php';