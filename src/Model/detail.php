<!DOCTYPE html>
<html>
<head>
  <title>Détails du collaborateur</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      margin: 0;
      line-height: 1.6;
    }

    .details-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="details-container">
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
        echo '<button type="button" id="retour" class="btn btn-primary retour">Retour</button>';
      } else {
        echo 'Collaborateur introuvable.';
      }
    } else {
      echo 'ID du collaborateur non spécifié.';
    }
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.retour').click(function() {
        history.back(); // Revenir à la page précédente
      });
    });
  </script>
</body>
</html>