<?php
// Requête SQL qui supprime les données en fonction de l'ID  // 
include '../Connexion/db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM entete WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);

$sql = 'DELETE FROM type WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);

$sql = 'DELETE FROM detail WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  $message = 'data delete successfully';
}
 if ("Location: ../Reception/reception.php"){
    header("Location: ../Reception/reception.php".$qstring);
}if ("Location: ../Livraison/livraison.php"){
  header("Location: ../Livraison/livraison.php".$qstring);
} if ("Location: ../Retour/retout.php"){
  header("Location: ../Retour/retour.php".$qstring);
}
?>
