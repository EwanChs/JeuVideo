<?php
    require "connexionBDDjeux.php";
    // Connexion à la base de données
    $db = Database2::connect();
    $statement = $db->query("SELECT * FROM utilisateur;");
    $jeu = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($jeu as $jeu){
        $jeu['email'];
        $jeu['mdp'];
    }
    ?>
<html>

<head>
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
    <!--link rel="stylesheet" href="VideoGames.css"-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
        <section>
            <h1>Connexion</h1>
            <form action="config.php" method="POST">
                <label>Adresse Mail</label>
                <input type="text" name="email"<?php htmlspecialchars($jeu['email'])?>>
                <label>Mot de passe</label>
                <input type="password" name="mdp"<?php htmlspecialchars($jeu['mdp'])?>>
                <a href="inscription.php">Vous n'avez pas de compte ? crée en un</a>
                <input type="submit" value="Valider" name="boutton-valider">
            </form>
        </section>
</body>

</html>