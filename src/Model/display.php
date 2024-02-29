<?php
require '../../vendor/autoload.php';
use \App\Classes\Database;

$databse = new Database();
$pdo = $databse->pdo;

$query = $pdo->query("SELECT * FROM collaborateur");
$collaborateurs = $query->fetchAll();

echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Code Produit</th>
      <th scope="col">Code Activité</th>
      <th scope="col">Salaire</th>
      <th scope="col">Date Début</th>
      <th scope="col">Date Fin</th>
    </tr>
  </thead>
  <tbody>';

foreach ($collaborateurs as $collaborateur) {
  $_POST['id']=$collaborateur['id'];
  echo '<tr>
    <td>' . htmlspecialchars($collaborateur['id']) . '</td>
    <td>' . htmlspecialchars($collaborateur['nom']) . '</td>
    <td>' . htmlspecialchars($collaborateur['prenom']) . '</td>
    <td>' . htmlspecialchars($collaborateur['code_P']) . '</td>
    <td>' . htmlspecialchars($collaborateur['code_A']) . '</td>
    <td>' . htmlspecialchars($collaborateur['salaire']) . '</td>
    <td>' . htmlspecialchars($collaborateur['dateDebut']) . '</td>
    <td>' . htmlspecialchars($collaborateur['dateFin']) . '</td>
    <td><a href="src/Model/detail.php?id=' . $_POST['id']. '" class="btn btn-primary">Ouvrir</a></td>
  </tr>';
}

echo '</tbody></table>';

