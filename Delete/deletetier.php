<?php
include '../Connexion/db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tiers WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  $message = 'data delete successfully';
}
header("Location: /tiers.php".$qstring);
