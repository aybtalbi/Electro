<!DOCTYPE html>
<html>
	
  <?php //insertion de head html 
		include 'head.html';
		?>

	<body>
		
		<?php //insertion de header de la page 
		include 'header.php';
		  if(!isset($_SESSION['connecter'])){
                                               
                        include("connextion.php");
                        $bd=connectMaBasi();
                         if (!$bd) {
                        die("Echec de la connexion"); }}

		?>
        
        <?php //insertion de navigation admin 
        if(isset($_SESSION['connecter']))
		 if($_SESSION['connecter'] == 'admin')
		   include 'navigation_admin.php';
		?>

		<?php //insertion de navigation client 
        if(isset($_SESSION['connecter']))
		 if($_SESSION['connecter'] == 'client')
		   include 'navigation_client.php';
		?>

<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Catégories</a></li>
							<li><a href="index.php?<?php echo $_GET['cat']?>=''"><?php echo $_GET['cat']?></a>

							<li><a href="affiche_prod.php?cat=<?php echo $_GET['cat']?>&ss_cat=<?php echo $_GET['ss_cat']?>"><?php echo $_GET['ss_cat']?></a></li>

							<li class="active"><?php echo $_GET['nom']?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

<?php 


    if (isset ($_POST['envoyer'])){

 $nom=$_POST['nom'];
 $email=$_POST['email'];
 $avis=mysqli_real_escape_string($bd,$_POST['avis']);
 $note=$_POST['note'];
 $id=$_POST['id'];



    $sql="INSERT INTO avis (nom,email,avis,note,id) values ('$nom','$email','$avis','$note','$id')";  
    if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Votre avis bien Envoyer  !!\")
        
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Votre avis n'est pas Envoyer !!\")
        
         </script>";
}}




   
     $produit = $_GET['produit'];

     $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit where reference = '$produit'";

     $result=mysqli_query($bd,$sql);
 
     $row = mysqli_fetch_array($result, MYSQLI_NUM);

 $prixn = $row[1]-($row[1]*$row[6])/100;


echo '

	<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

				<div class="row">


					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="'.$row[3].'" alt="">
							</div>

						</div>
					</div>
					<!-- /Product main img -->


					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						
											<div id="review-form">
												<form class="review-form" method="POST" action="">
												    <span>Votre Avis: </span></br></br>
													<input class="input" type="text" name="nom" placeholder="Votre nom">
													<input class="input" type="email" name="email" placeholder="Votre Email">
													<textarea class="input" name="avis" placeholder="votre avis"></textarea>
													<div class="input-rating">
														<span>Votre note : </span>
														<div class="stars">
					<input id="star5" name="note" value="5" type="radio"><label for="star5"></label>
					<input id="star4" name="note" value="4" type="radio"><label for="star4"></label>
					<input id="star3" name="note" value="3" type="radio"><label for="star3"></label>
					<input id="star2" name="note" value="2" type="radio"><label for="star2"></label>
					<input id="star1" name="note" value="1" type="radio"><label for="star1"></label>
						<input type="hidden" name="id" value='.$row[0].' />

														</div>
													</div>
													<button class="primary-btn" type="submit" name="envoyer">Envoyer</button>
												</form>
											</div>
										
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">'.$row[5].'</h2>
							<div>

                			<div class="product-rating"> ';
 ///////////// pour afficher note  /////////////////////////////////////////////////////                 
$sql="SELECT note FROM avis where '$produit' = id";

     $result=mysqli_query($bd,$sql);
 $i=0;
 $somme=0;
 while($r = mysqli_fetch_array($result, MYSQLI_NUM))
 { $i++;    $somme=$somme+$r[0];}
if($i==0){
					echo '			<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>   ';
}else{
     $n = $somme/$i;
     for($i=0;$i<$n;$i++)
     	{echo '<i class="fa fa-star"></i>';}

}									
echo '

									

								</div>
								<h3 class="product-price">- '.$row[6].' % !!</h3>
							</div>
							<div>

								<h3 class="product-price">'.$prixn.' DH <del class="product-old-price">'.$row[1].' DH</del></h3>
								<span class="product-available">In Stock</span>

							</div>
							   <ul class="product-links">
								<li><b>Categorie:</b></li>
								<li>'.$row[2].'</li>
							</ul>	

							<ul class="product-links">
								<li><b>Sous Categorie:</b></li>
								<li>'.$row[4].'</li>
							</ul>	

							<ul class="product-links">
								<li><b>Reference :</b></li>
								<li>'.$produit.'</li>
							</ul>							
						


                            <ul class="product-links">
								<li><b>Plus d\'information :</b></li>
								
							</ul>							

							<p>'.$row[7].'</p>


                            <ul class="product-links">
								<li><b>Quantité :</b></li>
								
							</ul>	
                         

							


					<form method="POST"> 

								<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">

										<input type="number" name="quantite" value=1>
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>		


                        <input type="hidden" name="reference" value="'.$row[0].'" />
                        <input type="hidden" name="image" value="'.$row[3].'" />

						<input type="hidden" name="nom" value="'.$row[5].'" />
		
						<input type="hidden" name="prix" value="'.$prixn.'" />

						<button class="add-to-cart-btn" type="submit" name="ajouter"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
					</form>


							</div>

							
							
							
							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


';   ?>

 




<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">avis</th>
      <th scope="col">note(5<i class='fa fa-star'></i>)</th>
      <th scope="col">date</th>
      
    </tr>
  </thead>
  <tbody>

<?php

     $sql="SELECT nom,avis,note,date FROM avis where '$produit' = id order by date ASC";

     $result=mysqli_query($bd,$sql);
 
 while($row = mysqli_fetch_array($result, MYSQLI_NUM))

  {
   ?>
 
    <tr>
  
      <td scope="row"><?= $row[0] ?></td>
      <td><?= $row[1] ?></td>

 
      <td><?php for ($i=0; $i<$row[2] ; $i++)
                 echo  "<i class='fa fa-star'></i>";
                    ?>
   
      </td>
      <td><?= $row[3] ?></td>
    </tr>
    
<?php  } ?>


  </tbody>
</table>








		<?php 
		include 'newsletter.php';
		?>

		
        <?php 
		include 'footer.php';
		?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
