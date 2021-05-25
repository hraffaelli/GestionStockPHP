<?php
session_start();
include_once('../Login/verification.php');
if(verif::islogged()){

 } 
 else {
   header('location: ../Login/login.php');

 }
 ?>
<?php
include '../Connexion/db.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM entete WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$fiche = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['no_piece']) && isset($_POST['date_code']) && isset($_POST['id_tiers']) && isset($_POST['type_code'])) {
  $no_piece = $_POST['no_piece'];
  $date_code = $_POST['date_code'];
  $id_tiers = $_POST['id_tiers'];
  $type_code = $_POST['type_code'];
  $sql = 'UPDATE entete SET no_piece=:no_piece, date_code=:date_code, id_tiers=:id_tiers , type_code=:type_code WHERE id=:id';
  $statement = $connection->prepare($sql);
  $statement->execute([':no_piece' => $no_piece, ':date_code' => $date_code, ':id_tiers' => $id_tiers, ':type_code' => $type_code, ':id' => $id]);
}


$id = $_GET['id'];
$sql = 'SELECT * FROM type WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$envoi = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['type_code']) && isset($_POST['statut'])) {
  $type_code = $_POST['type_code'];
  $statut = $_POST['statut'];
  $sql = 'UPDATE type SET type_code=:type_code, statut=:statut WHERE id=:id';
  $statement = $connection->prepare($sql);
  $statement->execute([':type_code' => $type_code, ':statut' => $statut, ':id' => $id]);
}


$id = $_GET['id'];
$sql = 'SELECT * FROM detail WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$produit = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['no_piece']) && isset($_POST['nom_article']) && isset($_POST['prix']) && isset($_POST['quantite'])) {
  $no_piece = $_POST['no_piece'];
  $nom_article = $_POST['nom_article'];
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];
  $sql = 'UPDATE detail SET no_piece=:no_piece, nom_article=:nom_article, prix=:prix, quantite=:quantite WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':no_piece' => $no_piece, ':nom_article' => $nom_article, ':prix' => $prix, ':quantite' => $quantite, ':id' => $id])) {
    $message = 'Modification réussi';
  }
}

?>
<?php require '../header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Mise à jour</h2>
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
          <input type=" text" value="<?= $fiche->no_piece ?>" type="text" name="no_piece" id="no_piece" class="form-control">
        </div>
        <div class="form-group">
          <label for="date_code">Date</label>
          <input type="date" value="<?= $fiche->date_code ?>" name="date_code" id="date_code" class="form-control">
        </div>
        <div class="form-group">
          <label for="id_tiers">Tier</label>
          <input type="text" value="<?= $fiche->id_tiers ?>" name="id_tiers" id="id_tiers" class="form-control">
        </div>
        <div class="form-group">
          <label for="type_code">Type</label>
          <input type="text" value="<?= $envoi->type_code ?>" name="type_code" id="type_code" class="form-control">
        </div>
        <div class="form-group">
          <label for="nom_article">Nom Article</label>
          <input type="text" value="<?= $produit->nom_article ?>" name="nom_article" id="nom_article" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix">Prix</label>
          <input type="text" value="<?= $produit->prix ?>" name="prix" id="prix" class="form-control">
        </div>
        <div class="form-group">
          <label for="quantite">Quantité</label>
          <input type="text" value="<?= $produit->quantite ?>" name="quantite" id="quantite" class="form-control">
        </div>
        <div class="form-group">
          <label for="statut">Statut</label>
          <input type="text" value="<?= $envoi->statut ?>" name="statut" id="statut" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>