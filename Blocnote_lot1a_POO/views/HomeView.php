<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BlocNote">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Page d'accueil - BlocNote</title>
</head>
<body>
    <div class="homepage">
        <header>
            <a href="/"> 
                <img src="./assets/img/logo.png" alt="logo, sitedigital" class="logo">
            </a>
            <a href="/">
                <div class="site-title">Bloc-Note</div>
            </a>
        </header>

        <div class="main-homepage">
            
            <div class="add-note-btn">
                <a href="/addpost" class="add-note-btn-link">
                    <div class="add-note-icon">&#43;</div>
                    <div class="add-note-text">Ajouter une note</div>
                </a>
            </div>

            <div class="notes">
                <!-- <div class="note">
                    <a href="/post">Titre de la note 1</a>
                </div> -->

                <?php
                foreach ($all_notes as $note) { ?>
                    <div class="note">
                        <a href="/post?id=<?=$note['id']?>"> <?= $note['title'] ?> </a>
                    </div>
                <?php } ?>
            </div>
            
        </div>
    </div>

</body>
</html>