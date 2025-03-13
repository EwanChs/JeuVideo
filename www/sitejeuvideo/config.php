<?php
 require "index.php";
 if (isset($_POST["email"]) && isset($_POST["mdp"])) {
     $email = $_POST["email"];
     $mdp = $_POST["mdp"];
     //$mdp = password_hash($mdp, PASSWORD_DEFAULT,['cost' => 10]);
     
     // Connexion à la base de données via PDO
     try {
         
         // Préparation de la requête pour éviter l'injection SQL
         $stmt = $db->prepare("SELECT * FROM utilisateur WHERE email = :email ");
         $stmt->execute(['email' => $email]);
         $user = $stmt->fetch();
         
         // Vérifier si l'utilisateur existe
         if ($user && password_verify($mdp, $user['mdp'])) {
            echo "Connexion réussie !";
            header("Location: index.php"); // Rediriger vers une page d'accueil
        } else {
            echo "L'email ou le mot de passe est incorrect.";
        }
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>
