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
    <title>Bloc-Note</title>
</head>
<body>
    <div class="addpost">
        <header>
            <a href="/"> 
                <img src="./assets/img/logo.png" alt="logo, sitedigital" class="logo">
            </a>
            <a href="/">
                <div class="site-title">Bloc-Note</div>
            </a>
        </header>

        <div class="main-addpage">
            <div class="addnote-title"> Ajouter une note </div>
            
            <form action="/addpost" method="POST">
                
                <label for="note-form-title">Titre</label>
                <input type="text" name="title" id="note-form-title" required>

                <label for="note-form-description">Description</label>
                <textarea name="description" id="note-form-description" required></textarea>

                <input type="submit" name="note-form-submit" id="note-form-submit" value="Enregistrer">

                <div class="addnote-message"><?=(!empty($message))?$message:''?></div>
            </form>
        </div>
    </div>

</body>
</html>