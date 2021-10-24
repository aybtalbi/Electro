

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">paiment</th>
      <th scope="col">produit</th>
      <th scope="col">Total(DH)</th>
      <th scope="col">Adresse</th>
       <th scope="col">date</th>
        <th scope="col">valide</th>
    </tr>
  </thead>
  <tbody>

<?php
     $id = $_SESSION['id_client'];
     $sql="SELECT numero_commande,type_paiment,Prix_Total,produits,date,adresse,valide FROM commande where id_client = '$id' ORDER BY Date DESC";

     $result=mysqli_query($bd,$sql);
 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))

  {
   ?>



  
    <tr>
  
      <td scope="row"><?= $row[0] ?></td>
      <td><?= $row[1] ?></td>
      <td><?= $row[3] ?></td>
      <td><?= $row[2] ?> DH</td>
      <td><?= $row[5] ?></td>
      <td><?= $row[4] ?></td>
      <td><?= $row[6] ?></td>
    </tr>
    
<?php  } ?>






  </tbody>
</table>







