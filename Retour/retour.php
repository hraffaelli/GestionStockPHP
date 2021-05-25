<?php
session_start();
include_once('../Login/verification.php');
if(verif::islogged()){

 } 
 else {
   header('location:../Login/login.php');

 }
 
include '../Connexion/db.php';
$sql = 'SELECT * FROM entete INNER JOIN detail ON detail.id=entete.id INNER JOIN type ON type.id = entete.id WHERE type.type_code = "Retour"';
$statement = $connection->prepare($sql);
$statement->execute();
$achat = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<?php require '../header.php'; ?> 

<script>
$(document).ready(function(){
search();  
export2csv();  
});
</script>

<div style=" position: fixed; margin-left: 30px;" class="card mt-5 ">
    <div class="card-header">
      <h2>Recherche</h2>
    </div>
    <div  class="card-body">
      <form action="#" method="POST">
        <div class="form-group">
          <label> N° Pièce</label>
          <input type="text" name="no_piece" id="no_piece" class="form-control" value="">
        </div>
        <div class="form-group">
          <label>Date Commande</label>
          <input type="text" name="date_code" id="date_code" class="form-control " value="">
        </div>
        <div class="form-group">
          <label>Tiers</label>
          <input type="text" name="id_tiers" id="id_tiers" class="form-control " value="">
        </div>
        <div class="form-group">
          <label>Nom Article</label>
          <input type="text" name="nom_article" id="nom_article" class="form-control " value="">
        </div>
        <div class="form-group">
          <label>Statut</label>
          <input type="text" name="statut" id="statut" class="form-control " value="">
        </div>
        <div class="form-group">
          <input type="submit" id="btnexport" class="btn btn-info" name="Exporter" value="Exporter">
        </div>
      </form>
    </div>
  </div>
<div style="margin-right: 50px;" class="container">
  <div class="card mt-5 ">
    <div class="card-header">
      <h2>Les Retour</h2>
    </div>
    <div class="card-body">
      <table id="data" class="table table-bordered display">
      <thead>
        <tr>
          <th >N° Pièce</th>
          <th >Date</th>
          <th >Tiers</th>
          <th >Type</th>
          <th >Nom Article</th>
          <th >Prix</th>
          <th >Quantité</th>
          <th >Statut</th>
        </tr>
      </thead>
        <tbody id="myTable">
        <?php foreach ($achat as $achats) : ?>
          <tr class="content">
            <td class="export"><?= $achats->no_piece; ?></td>
            <td class="export"><?= $achats->date_code; ?></td>
            <td class="export"><?= $achats->id_tiers; ?></td>
            <td class="export"><?= $achats->type_code; ?></td>
            <td class="export"><?= $achats->nom_article; ?></td>
            <td class="export"><?= $achats->prix; ?></td>
            <td class="export"><?= $achats->quantite; ?></td>
            <td class="export"><?= $achats->statut; ?>
            <td>
              <a href="../Edit/edit.php?id=<?= $achats->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Voulez vous vraiment supprimer ?')" href="../Delete/delete.php?id=<?= $achats->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>        
      </table>
    </div>
  </div>
</div>
<?php require '../footer.php'; ?>