<?php
    require "connexionBDDjeux.php";

    // Connexion à la base de données
    $db = Database2::connect();
?>
<html>

<head>
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
    <!--link rel="stylesheet" href="VideoGames.css"-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/db20734d6c.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1>Crée un nouveau compte</h1>
        <form action="configinscription.php" method="POST">
            <label>Adresse Mail</label>
            <input type="text" name="email">
            <label>Mot de passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider" name="boutton-valider">
        </form>
    </section>
</body>

</html>