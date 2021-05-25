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
$sql = 'SELECT * FROM tiers WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$fourn = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['nom_tiers']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['site_web'])) {
  $nom_tiers = $_POST['nom_tiers'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $site_web = $_POST['site_web'];
  $sql = 'UPDATE tiers SET nom_tiers=:nom_tiers, telephone=:telephone, adresse=:adresse, site_web=:site_web WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom_tiers' => $nom_tiers, ':telephone' => $telephone, ':adresse' => $adresse, ':site_web' => $site_web, ':id' => $id])) {
    $message = 'Modification réussi';
  }
}

?>
<?php require '../header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Mise à du Tiers</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nom_tiers">Nom Tiers</label>
          <input value="<?= $fourn->nom_tiers ?>" type="text" name="nom_tiers" id="nom_tiers" class="form-control">
        </div>
        <div class="form-group">
          <label for="telephone">N° Telephone</label>
          <input type="text" value="<?= $fourn->telephone ?>" name="telephone" id="telephone" class="form-control">
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input type="text" value="<?= $fourn->adresse ?>" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
          <label for="site_web">Site Web</label>
          <input type="text" value="<?= $fourn->site_web ?>" name="site_web" id="site_web" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Tiers</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>