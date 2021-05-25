<?php   
 include '../CRUD/Connexion/db.php';
 $sql = "SELECT * FROM entete INNER JOIN detail ON detail.id = entete.id INNER JOIN type ON type.id = entete.id ";
$statement = $connection->prepare($sql);
$statement->execute();
$achat = $statement->fetchAll(PDO::FETCH_OBJ); 
 ?>  
 <!DOCTYPE html>  
 <html lang="UTF-8">  
      <head>  
      <meta charset="utf-8">
           <title>Webslesson Tutorial | Export HTML table to Excel File using Jquery with PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 class="text-center">Export HTML table to Excel File using Jquery with PHP</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>                                 
                               <th width="30%">N° Pièce</th>  
                               <th width="10%">Date</th>  
                               <th width="30%">Tiers</th>
                               <th width="30%">Type</th>
                               <th width="30%">Nom Article</th>  
                               <th width="30%">Prix</th>
                               <th width="10%">Quantité</th>
                               <th width="30%">Statut</th>     
                          </tr>    
                          <?php foreach($achat as $achats): ?>     
                            <tr>
                              <td><?= $achats->no_piece; ?></td>
                              <td><?= $achats->date_code; ?></td>
                              <td><?= $achats->id_tiers; ?></td>
                              <td><?= $achats->type_code; ?></td>             
                              <td><?= $achats->nom_article; ?></td>
                              <td><?= $achats->prix; ?></td>
                              <td><?= $achats->quantite; ?></td> 
                              <td><?= $achats->statut; ?></td>          
                          </tr>
                          <?php endforeach; ?>                           
                     </table>  
                </div>  
                <div align="center">  
                     <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#employee_table').html();  
           var page = "export.php?data=" + excel_data;  
           window.location = page;  
      });  
 });  
 </script>  