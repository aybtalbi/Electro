
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">genre</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">date Naissance</th>
      <th scope="col">supprimer compte</th>
       <th scope="col">Maj compte</th>
      
    </tr>
  </thead>
  <tbody>

<?php

     $sql="SELECT id,nom,prenom,genre,password,date FROM client ";

     $result=mysqli_query($bd,$sql);
 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))

  {
   ?>
 
    <tr>
  
      <td scope="row"><?= $row[0] ?></td>
      <td><?= $row[1] ?></td>
      <td><?= $row[2] ?></td>
      <td><?= $row[3] ?> </td>
      <td><?= $row[4] ?></td>
      <td><?= $row[5] ?></td>
      <td><button type="submit" name="valider" class="btn btn-danger"><a href="index.php?supp_client_admin=''">supprimer</a></button></td>
      <td><button type="submit" name="valider" class="btn btn-danger"><a href="index.php?maj_client_admin=''">MAJ</a></button></td>
    </tr>
    
<?php  } ?>






  </tbody>
</table>







