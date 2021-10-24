
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">id produit</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">avis</th>
      <th scope="col">note</th>
      <th scope="col">date</th>
      
    </tr>
  </thead>
  <tbody>

<?php

    

     $sql="SELECT id,nom,email,avis,note,date FROM avis  order by date DESC";

     $result=mysqli_query($bd,$sql);
 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))

  {
   ?>
 
    <tr>
  
      <td scope="row"><?= $row[0] ?></td>
      <td><?= $row[1] ?></td>
      <td><?= $row[2] ?></td>
      <td><?= $row[3] ?> </td>
     <td><?php for ($i=0; $i<$row[4] ; $i++)
                 echo  "<i class='fa fa-star'></i>";
                    ?>
   
      </td>
      <td><?= $row[5] ?></td>
    </tr>
    
<?php  } ?>


  </tbody>
</table>
