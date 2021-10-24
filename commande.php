	<!DOCTYPE html>
<html>
	
 


        <?php //insertion de head html 
		include 'head.html';
		?>

	<body>
		
		<?php //insertion de header de la page 


		include 'header.php';
		

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
        
<style type="text/css">
	
	#b{
		background-color: #C92020;
	}
</style>


<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">ADRESSE DE FACTURATION</h3>
							</div>
						<form action="" method="POST">	
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="adresse" placeholder="Adresse">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="ville" placeholder="ville">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="paye" placeholder="paye">
							</div>
							<div class="form-group">
								<input class="input" type="number" name="code" placeholder="Code postal">
							</div>
							<div class="form-group">
								<input class="input" type="number" name="tele" placeholder="Telephone">
							</div>
							
						</div>
						<!-- /Billing Details -->

					

					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Votre commande
</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUIT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
                          <div class="order-products">

<?php           if(isset($_SESSION["panier"])){
					if(!empty($_SESSION["panier"]))
					{
						$produits ="";
						$total = 0;
						$nb = 0;
						foreach($_SESSION["panier"] as $keys => $values)
						{ $nom = $values["nom"];
					       $reference = $values["reference"];
					       $prix = $values["prix"];
					       $quantité =  $values["quantite"];
					       $image =  $values["image"];
					       $nb++;

					       $total = $total + ($values["quantite"] * $values["prix"]);
					       $produits = $produits."* ".$quantité."x ".$nom." "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$prix." DH<br>";
  
?>

								<div class="order-col">
									<div><?php echo $quantité; ?>x <?php echo $nom; ?></div>
									<div><?php echo $quantité*$prix; ?> DH</div>
								</div>
								
<?php  }?>

							</div>
							<div class="order-col">
								<div>Livraison</div>
								<div><strong>Gratuit</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo $total; ?> DH</strong></div>
							</div>
						</div>
<?php  }} ?>						
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1" value="carte Bancaire" Onclick="addOption('1');">
								<label for="payment-1">
									<span></span>
                                        Paiement par Carte Bancaire 								</label>
								<div class="caption" id="aa">
									<input type="text" name="ncarte" placeholder="nom de la carte" >
									<input type="number" name="nmcarte"  placeholder="Numero de la carte" >
									<input type="number" name="securite" placeholder="Code de securité" >
									<input type="date" name="dateexp" placeholder="date expiration" >
								</div>
							</div>
							<div class="input-radio">
							<input type="radio" name="payment" id="payment-2" value="Paiement a Livraison" checked Onclick="addOption('0');">
								<label for="payment-2">
									<span></span>
									Paiement à Livraison 
								</label>
							</div>
							
						</div>
						
						<a class="primary-btn order-submit"><button id="b" type="submit" name="commande" class="btn btn-danger">Passer la commande</button></a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





<?php
       if(!isset($_SESSION['connecter']))
       	{
		 	echo "<script> 
         alert(\"vous devez vous connecter  !!\")
         window.location.replace(\"authentifie.php\");
         </script>";
		 }

       if(isset($_SESSION['connecter']))
		 if($_SESSION['connecter'] != 'client')
		 {
		 	echo "<script> 
         alert(\"vous devez vous connecter  !!\")
         window.location.replace(\"authentifie.php\");
         </script>";
		 }



?>

<?php  

if (isset ($_POST['commande'])){
 $email=$_POST['email'];
 $adresse=$_POST['adresse'];
 $code=$_POST['code'];
 $ville=$_POST['ville'];
  $paye=$_POST['paye'];
 $adresse=mysqli_real_escape_string($bd,$_POST['adresse']);
 $tele=$_POST['tele'];
 $payment=$_POST['payment'];
 $id_client = $_SESSION['id_client'];


   $sql="INSERT INTO commande (email,adresse,ville,paye,code,tele,type_paiment,Prix_Total,id_client,produits) values ('$email','$adresse','$ville','$paye',$code,'$tele','$payment',$total,'$id_client','$produits')";  
    if(mysqli_query($bd,$sql)){
       unset($_SESSION['panier']);
       echo "<script> 
         alert(\"commande bien passé !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"commade n'est pas ajouté  !!\")
         
         </script>";
}}


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


</script>



		

	</body>
</html>
