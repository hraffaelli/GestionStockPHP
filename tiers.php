<!-- Vérification d'authentification  -->
<?php
session_start();
include_once('/Login/verification.php');
if(verif::islogged()){

 } 
 else {
   header('location: /Login/login.php');

 }
 // Requête SQL qui va chercher les données saisie //
include '/Connexion/db.php';
$message = '';
if (isset($_POST['nom_tiers'])  && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['site_web'])) {
  $nom_tiers = $_POST['nom_tiers'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $site_web = $_POST['site_web'];

  $sql = 'INSERT INTO tiers (nom_tiers, telephone, adresse, site_web) VALUES(:nom_tiers, :telephone, :adresse, :site_web)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nom_tiers' => $nom_tiers, ':telephone' => $telephone, ':adresse' => $adresse, ':site_web' => $site_web])) {
    $message = 'data inserted successfully';
  }
}

?>

<?php require 'header.php'; ?>
<div style=" position:absolute; margin-left: 20px;" class="card mt-5">
  <div class="card-header">
    <h2>Ajouter un Tiers</h2>
  </div>
  <div class="card-body">
    <?php if (!empty($message)) : ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
        <label for="nom_tiers">Nom du Tiers</label>
        <input type="text" name="nom_tiers" id="nom_tiers" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="telephone">N° Téléphone</label>
        <input type="text" name="telephone" id="telephone" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="site_web">Site Web</label>
        <input type="text" name="site_web" id="site_web" class="form-control" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info">Ajouter un Tiers</button>
      </div>
    </form>
  </div>
</div>



<?php
// Requête SQL qui va chercher tous les tiers // 
include '/Connexion/db.php';
$sql = 'SELECT * FROM tiers';
$statement = $connection->prepare($sql);
$statement->execute();
$tier = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<div style="margin-right: 300px;"  class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Tous les produits</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nom Tiers</th>
          <th>N° Telephone</th>
          <th>Adresse</th>
          <th>Site Web</th>
        </tr>
        <?php foreach ($tier as $tiers) : ?>
          <tr>
            <td><?= $tiers->nom_tiers; ?></td>
            <td><?= $tiers->telephone; ?></td>
            <td><?= $tiers->adresse; ?></td>
            <td><?= $tiers->site_web; ?></td>
            <td>
              <a href="/Edit/edittier.php?id=<?= $tiers->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Voulez vous vraiment supprimer ?')" href="/Delete/deletetier.php?id=<?= $tiers->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>