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
    <title>Page de note - Bloc-Note</title>
</head>
<body>
    <div class="postpage">
        <header>
            <a href="/"> 
                <img src="./assets/img/logo.png" alt="logo, sitedigital" class="logo">
            </a>
            <a href="/">
                <div class="site-title">Bloc-Note</div>
            </a>
        </header>

        <div class="main-postpage">
            <!-- <div class="note-title"> Titre de la note 1 </div>
            <div class="note-description"> Description de la note 1 </div> -->

            <div class="note-title"> <?=$note['title']?> </div>
            <div class="note-description"> <?=$note['description']?> </div>
        </div>
    </div>

</body>
</html>