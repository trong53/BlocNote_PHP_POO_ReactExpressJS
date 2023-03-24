<?php

require './controllers/TwigEnvironment.php';

$template = $twig->load('ErrorView.html.twig');
echo $template->render([]);