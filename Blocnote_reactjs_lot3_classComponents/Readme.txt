
0/ Git clone le projet

1/ Venir au dossier du projet, puis lancer le NPM pour récupérer les dépendances du côté serveur :  npm update     
            (Vous devez avoir le logiciel Composer sur votre ordinateur)

2/ Pour le côté client (FrontEnd) : Venir au client et lancer NPM 

        cd client
        npm update

3/ Modifier les paramètres de connection de votre base de données :  config.php

4/ Revenir au dossier du projet, et lancer le site web
        cd ..
        npm run dev

Normalement une fenêtre de votre navigateur sera ouverte. Sinon, vous lancer : localhost:3000

Note: 
a. Si vous voulez lancer uniquement la partie serveur : node server.js
puis sur votre navigateur : localhost:4000