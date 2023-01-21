<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GEST-PART | Participant</title>

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
        Voir -- <a href="list-participant">Consulter la liste des participants </a>
    </p>

    <h2>
        Enregistrer les participants
    </h2>


    <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/'>Accueil</a></p>
    </footer>

</body>

</html>