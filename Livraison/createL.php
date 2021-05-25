<?php
session_start();
include_once('../Login/verification.php');
if(verif::islogged()){

 } 
 else {
   header('location: ../Login/login.php');

 }
 
include '../Connexion/db.php';
$message = '';
if (isset($_POST['no_piece'])  && isset($_POST['date_code']) && isset($_POST['id_tiers']) && isset($_POST['type_code']) && isset($_POST['nom_article']) && isset($_POST['prix']) && isset($_POST['quantite']) && isset($_POST['type_code']) && isset($_POST['statut'])) {

  $no_piece = $_POST['no_piece'];
  $date_code = $_POST['date_code'];
  $id_tiers = $_POST['id_tiers'];
  $type_code = $_POST['type_code'];
  $sql = 'INSERT INTO entete (no_piece, date_code, id_tiers, type_code) VALUES (:no_piece, :date_code, :id_tiers, :type_code)';
  $statement = $connection->prepare($sql);
  $statement->execute([':no_piece' => $no_piece, ':date_code' => $date_code, ':id_tiers' => $id_tiers, ':type_code' => $type_code]);


  $type_code = $_POST['type_code'];
  $statut = $_POST['statut'];
  $sql = 'INSERT INTO type (type_code, statut) VALUES (:type_code, :statut)';
  $statement = $connection->prepare($sql);
  $statement->execute([':type_code' => $type_code, ':statut' => $statut]);



  $no_piece = $_POST['no_piece'];
  $nom_article = $_POST['nom_article'];
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];
  $sql = 'INSERT INTO detail (no_piece, nom_article, prix, quantite) VALUES (:no_piece, :nom_article, :prix, :quantite)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':no_piece' => $no_piece, ':nom_article' => $nom_article, ':prix' => $prix, ':quantite' => $quantite])) {
    $message = 'Ajout réussi';
  }
}

?>
<?php require '../header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Créer une Livraison</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="no_piece">N° Pièce</label>
          <input type="text" name="no_piece" id="no_piece" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="date_code">Date</label>
          <input type="date" name="date_code" id="date_code" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="id_tiers">Tiers</label>
          <input type="text" name="id_tiers" id="id_tiers" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="type_code">Type</label>
          <input type="text" name="type_code" id="type_code" class="form-control" value="Livraison" required>
        </div>
        <div class="form-group">
          <label for="nom_article">Nom Article</label>
          <input type="text" name="nom_article" id="nom_article" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="prix">Prix</label>
          <input type="text" name="prix" id="prix" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="quantite">Quantité</label>
          <input type="text" name="quantite" id="quantite" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="statut">Statut</label>
          <select id="statut" class="form-control" name="statut">
            <option value="En cours">En cours</option>
            <option value="Recu">Reçu</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Créer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>