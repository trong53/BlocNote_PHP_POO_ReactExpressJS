
0/ Git clone le projet

1/ Venir au dossier du projet, puis lancer le composer pour récupérer la dépendance Twig : composer update     
            (Vous devez avoir le logiciel Composer sur votre ordinateur)

2/ Modifier les paramètres de votre base de données :  config.php

3/ Lancer le site web : index.php


*************************************************************************************

Il faut installer composer dans votre dossier de projet.
(
    a. Installer PHP si vous n'avez pas, normalement vous avez PHP dans VSCode (https://www.php.net/manual/fr/install.php)
    b. Installer Composer sur votre ordinateur (https://getcomposer.org/download/)
    c. Au terminal de votre projet, par exemple Blocnote_twig, taper composer init pour installer Composer dans votre projet 
        (C:\laragon\www\Blocnote_twig>composer init)
        et suivre les guides
    d. utiliser Composer (vient d'être installé) pour installer Twig (C:\laragon\www\Blocnote_twig>composer require "twig/twig:^3.0")
        https://twig.symfony.com/doc/2.x/  (documentation)
    Et c'est tout.
)
