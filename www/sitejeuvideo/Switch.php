<?php

require "connexionBDDjeux.php";
$db = Database2::connect();
// Vérifie si une plateforme est sélectionnée
$plateforme = isset($_GET['Platform']) ? $_GET['platform'] : 'Nintendo switch'; 

// Requête SQL sécurisée pour récupérer les jeux de la plateforme choisie
$statement = $db->prepare("SELECT id, nom, image FROM jeux WHERE Platforme = ?");
$statement->execute([$plateforme]);
$jeux = $statement->fetchAll(PDO::FETCH_ASSOC);
//$result = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<html>

<head>
    <title>Jeux - <?php echo htmlspecialchars($plateforme); ?></title>
    <link rel="stylesheet" href="VideoGames.css">
    <script src="https://kit.fontawesome.com/db20734d6c.js" crossorigin="anonymous"></script>
</head>

<body>
   <!-- Liens pour filtrer par plateforme -->
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
       <header>
            <div class="filActu">
                <input type="text" id="searchBar" placeholder="Rechercher un jeu..." onkeyup="searchGames()">
            </div>
        </header>
            <div id="gameList">
               <? foreach($jeux as $jeu) : ?>
                    <div class="game-item">
                    <a href="Detail.php?id=<?php echo $jeu['id'];?>">
                    <img src="Images/<?php echo htmlspecialchars($jeu['image'])?>" alt="<?php echo htmlspecialchars($jeu['nom'])?>">
                     <p><?php echo htmlspecialchars($jeu['nom'])?> </p>
                    </a>
                </div>
                <? endforeach; ?>
               
    <footer>
        <p>© 2024 Jeu Video.com 2.0 - Tous droits réservés</p>
        <div class="social-icons">
            <a href="#"><i class="fab fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fab fa-instagram"></i></a>
            <a href="#"><i class="fab fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fab fa-discord"></i></a>
        </div>
    </footer>
    <script src="navbar.js"></script>

</body>

</html>