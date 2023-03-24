<?php

require './models/HomeModel.php';

$all_notes = getAllNotes();

require './controllers/TwigEnvironment.php';
$template = $twig->load('HomeView.html.twig');
echo $template->render([
    'all_notes' => $all_notes,
]);