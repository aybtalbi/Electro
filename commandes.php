 <?php 

if (isset ($_POST['valider'])){


    $id2 = $_POST['id'];
    $sql="UPDATE commande SET valide='valide' WHERE numero_commande='$id2'";

    if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"commande est validé !!\")
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"commande n'est pas validé !!\")
         </script>";
}}

   ?> 
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id commande</th>
      <th scope="col">id client</th>
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
     
     $sql="SELECT numero_commande,type_paiment,Prix_Total,produits,date,adresse,valide,id_client FROM commande ORDER BY Date DESC ";

     $result=mysqli_query($bd,$sql);
 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))

  {
   ?>
 
    <tr>
  
      <td scope="row"><?= $row[0] ?></td>
      <td><?= $row[7] ?></td>
      <td><?= $row[1] ?></td>
      <td><?= $row[3] ?></td>
      <td><?= $row[2] ?> DH</td>
      <td><?= $row[5] ?></td>
      <td><?= $row[4] ?></td>

 <?php  if ($row[6]=="valide") {
   
  ?>      
      <td>commande Déja validé</td>
 <?php }else {  ?>  
   <form method="POST" action="">
      <td><button type="submit" name="valider" class="btn btn-danger">Valider</button></td>
       <?php echo '<input type="hidden" name="id" value="'.$row[0].'"/>';  ?>  
     
   </form>    
 <?php }  ?>  
    </tr>
    

<?php  } ?>


  </tbody>
</table>

