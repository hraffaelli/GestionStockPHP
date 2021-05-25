<?php session_start();
include_once('/Login/verification.php');
if(verif::islogged()){

 } 
 else {
   header('location: /Login/login.php');

 }
 ?>
 <style>
  table {
    border-collapse: collapse;
    border: 2px black solid;
    font: 12px sans-serif;
    width: 1070px;
  }

  td {
    border: 1px black solid;
    padding: 5px;
  }
</style>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Ajouter un fichier</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form action="../Transfert/import.php" method="POST" enctype="multipart/form-data">
        <div class="input-row">
          <input type="file" name="filename" id="fileUpload" />
          <input type="button" id="upload" value="Afficher" onclick="Upload()" />
          <input type="submit" name="import" id="import" class="btn btn-success" value="Import"> </input>
          <br />
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="card mt-5 ">
    <div class="card-header">
      <h2>Tous les produits</h2>      
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <script type="text/javascript">
          function Upload() {
            var fileUpload = document.getElementById("fileUpload");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
            if (regex.test(fileUpload.value.toLowerCase())) {
              if (typeof(FileReader) != "undefined") {
                var reader = new FileReader();
                reader.onload = function(e) {
                  var table = document.createElement("table");
                  var rows = e.target.result.split("\n");
                  for (var i = 0; i < rows.length; i++) {
                    var cells = rows[i].split(";");
                    if (cells.length > 1) {
                      var row = table.insertRow(-1);
                      for (var j = 0; j < cells.length; j++) {
                        var cell = row.insertCell(-1);
                        cell.innerHTML = cells[j];
                      }
                    }
                  }
                  var dvCSV = document.getElementById("dvCSV");
                  dvCSV.innerHTML = "";
                  dvCSV.appendChild(table);
                }
                reader.readAsText(fileUpload.files[0]);
              } else {
                alert("This browser does not support HTML5.");
              }
            } else {
              alert("Please upload a valid CSV file.");
            }
          }
        </script>
        <div id="dvCSV">
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>