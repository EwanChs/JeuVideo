<?php

require "connexionBDDjeux.php";
$db = Database2::connect();
$id = isset($_GET['id']) ? intval($_GET['id']) : 1; // Sécurisation de l'ID
$statement = $db->prepare("SELECT * FROM jeux WHERE id = ?;");

$statement->execute([$id]);
$jeu = $statement->fetch(PDO::FETCH_ASSOC)
//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<nav>
    <a href="index.php"><h1>GamesCord</h1></a>
        <button class="menu-toggle"><i class="fas fa-bard"></i></button>
        <div class="lien">
            <a href="PC.php"><i class="fas fa-desktop"></i> PC</a>
            <a href="PS5.php"><i class="fab fa-playstation"></i> PS5</a>
            <a href="Xbox.php"><i class="fab fa-xbox"></i> Xbox</a>
            <a href="Switch.php"><i class="fas fa-gamepad"></i> Switch</a>
            <a href="Offre.php"><i class="fas fa-tags"></i> Offres</a>
        </div>
        <div class="login">
        <a href="Login.php"target="_blank"><i class="far fa-user-circle"></i></a>
        </div>
       </nav>
    <head>
        <title><?php echo htmlspecialchars($jeu['nom'])?></title>
        <link rel="stylesheet" href="detail.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>       
        <header class="game-banner" style="background-image: url('Images/<?php echo htmlspecialchars($jeu['image'])?>');">
            <div class="overlay"></div>
            <div class="game-info">
                <img src="Images/<?php echo htmlspecialchars($jeu['image'])?>" alt="<?php echo htmlspecialchars($jeu['nom'])?>" class="game-cover">
                <div class="game-details">
                    <h1><?php echo htmlspecialchars($jeu['nom'])?></h1>
                    <p class="platforme"><?php echo htmlspecialchars($jeu['Platforme'])?></p>
                    <p class="game-price"><?php echo htmlspecialchars($jeu['prix'])?>€</p>
                    <button class="buy-btn">Ajouter au pagner<i class="fa-solid fa-cart-shopping"></i></button>
                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                </div>
            </div>
        </header>

        <section class="game-description">
            <h2>Description</h2>
            <p><?php echo htmlspecialchars($jeu['description'])?></p>
            <table>
                <tr><td id="titre_tableau">Plateforme :</td><td><?php echo htmlspecialchars($jeu['Platforme'])?></td></tr>
                <tr><td id="titre_tableau">Genre :</td><td><?php echo htmlspecialchars($jeu['genre'])?></td></tr>
                <tr><td id="titre_tableau">Développeur :</td><td><?php echo htmlspecialchars($jeu['editeur'])?></td></tr>
                <tr><td id="titre_tableau">Date de sortie :</td><td><?php echo htmlspecialchars($jeu['anneeSortie'])?></td></tr>
            </table>
        </section>


    <section class="game-media">
        <h2>Visuel</h2>
        <div class="media-gallery">
            <img src="images/screenshot1.jpg" alt="Screenshot 1">
            <img src="images/screenshot2.jpg" alt="Screenshot 2">
            <img src="images/screenshot3.jpg" alt="Screenshot 3">
        </div>
    </section>

    <section class="link-video">
        <h2>Voir Video</h2>
        <a href="#">Youtube</a>

    </section>


    <footer>
        <p>&copy; 2024 - Tous droits réservés</p>
    </footer>

</body>
</html>