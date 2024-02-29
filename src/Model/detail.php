<?php
  require '../../vendor/autoload.php';
  use \App\Classes\Database;
  
  $databse = new Database();
  $pdo = $databse->pdo;
// Récupérer l'ID du collaborateur depuis les paramètres d'URL
if (isset($_GET['id'])) {
  $collaborateurId = $_GET['id'];

  // Effectuer une requête pour obtenir les détails du collaborateur avec cet ID depuis la base de données
  // Remplacez les lignes suivantes avec votre propre logique pour récupérer les détails du collaborateur
  $query = $pdo->prepare("SELECT * FROM collaborateur WHERE id = :id");
  $query->bindParam(':id', $collaborateurId);
  $query->execute();

  $collaborateur = $query->fetch();

  // Afficher les détails du collaborateur
  if ($collaborateur) {
    echo '<h1>Détails du collaborateur</h1>';
    echo '<p>ID: ' . htmlspecialchars($collaborateur['id']) . '</p>';
    echo '<p>Nom: ' . htmlspecialchars($collaborateur['nom']) . '</p>';
    echo '<p>Prénom: ' . htmlspecialchars($collaborateur['prenom']) . '</p>';
    echo '<p>Code Produit: ' . htmlspecialchars($collaborateur['code_P']) . '</p>';
    echo '<p>Code Activité: ' . htmlspecialchars($collaborateur['code_A']) . '</p>';
    echo '<p>Salaire: ' . htmlspecialchars($collaborateur['salaire']) . '</p>';
    echo '<p>Date Début: ' . htmlspecialchars($collaborateur['dateDebut']) . '</p>';
    echo '<p>Date Fin: ' . htmlspecialchars($collaborateur['dateFin']) . '</p>';
  } else {
    echo 'Collaborateur introuvable.';
  }
} else {
  echo 'ID du collaborateur non spécifié.';
}
