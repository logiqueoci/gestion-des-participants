<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GEST-PART | Listes-participants</title>

</head>

<body>
    <h1>
        Bienvenue sur Gest-Part
    </h1>
    <h2>
        L'application qui vous permet de gérer la liste de présence
    </h2>

    <h3>Menu</h3>

    <p>
        Retour -- <a href="add-participant">Enregistrer un participant</a>
    </p>

    <h2>
        Liste des participants
    </h2>


    <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/'>Accueil</a></p>
    </footer>

</body>

</html>