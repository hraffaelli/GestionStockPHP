
<?php
// (A) CONNECT TO DATABASE
require "../Connexion/db.php";

// (B) READ CSV FILE + IMPORT ROWS
$handle = fopen($_FILES['filename']['tmp_name'], "r");

$row = 0;

if ($handle) {
  while (($line = fgetcsv($handle, 1000, $delimiter = ";")) !== false) {

    $row++;

    if ($row == 1) continue;
    try {
      
      $format_fr = $line[1];
      $format_us = implode('/',array_reverse  (explode('/',$format_fr)));
      $line[1] = $format_us ;
      $stmt = $connection->prepare("INSERT INTO `entete`(`no_piece`, `date_code`, `id_tiers`, `type_code`) VALUES (?,?,?,?)");
      $stmt->execute([$line[0], $line[1], $line[2], $line[3]]);

      $stmt = $connection->prepare("INSERT INTO `detail`(`no_piece`, `nom_article`, `prix`, `quantite`) VALUES (?,?,?,?)");
      $stmt->execute([$line[0], $line[4], $line[5], $line[6]]);      

      $stmt = $connection->prepare("INSERT INTO `type`(`type_code`, `statut`) VALUES (?,?)");
      $stmt->execute([$line[3], $line[7]]);
    } catch (Exception $ex) {
      echo $ex->getmessage();
    }
  }
  fclose($handle);
} else {
  echo "ERROR OPENING";
}

?>

<?php header("Location: ../Page/index.php" . $qstring); ?>