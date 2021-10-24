
<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
                        

                        <?php /// affichage de nom et prenom de client ou utilisateur
                        session_start();
                        if(isset($_SESSION['connecter'])){
                                               
                        include("connextion.php");
                        $bd=connectMaBasi();
                         if (!$bd) {
                        die("Echec de la connexion"); }
	
                        if($_SESSION['connecter'] == 'client')
                        { $client=$_SESSION['id_client'];
                         $sql="SELECT prenom,nom FROM client WHERE id='$client'";
                         $result=mysqli_query($bd,$sql);  
                         $row = mysqli_fetch_array($result, MYSQLI_NUM);
                                                  
                          echo '<li><a href="#"><i class="fa fa-user-o"></i>'.$row[0].' '.$row[1].' connecté !</a></li>';}
                        

                        if($_SESSION['connecter'] == 'admin')
                        { $admin=$_SESSION['id_admin'];
                         $sql="SELECT prenom,nom FROM admin WHERE id='$admin'";
                         $result=mysqli_query($bd,$sql);  
                         $row = mysqli_fetch_array($result, MYSQLI_NUM);
                          echo '<li><a href="#"><i class="fa fa-user-o"></i>'.$row[0].' '.$row[1].' connecté !</a></li>';}}

                        ?>






<?php //traitement de panier





if(isset($_POST["supprimer"]))
{

	{   
		foreach($_SESSION["panier"] as $keys => $values)
		{
			if($values["reference"] == $_POST["reference"])
			{
				unset($_SESSION["panier"][$keys]);
				echo '<script>alert("produit est supprimé !")</script>';

			}
		}
	}
}
elseif(isset($_POST["ajouter"]))
{
	if(isset($_SESSION["panier"]))
	{
		$reference = array_column($_SESSION["panier"], "reference");
		if(!in_array($_POST["reference"], $reference))
		{
			$count = count($_SESSION["panier"]);
			$tableau_produit = array(
				'reference'			=>	$_POST["reference"],
				'nom'			=>	$_POST["nom"],
				'prix'		=>	$_POST["prix"],
				'quantite'		=>	$_POST["quantite"],
				'image'		=>	$_POST["image"]
				
			);
			$_SESSION["panier"][$count] = $tableau_produit;
		}
		else
		{
			echo '<script>alert("produit a déja ajouté")</script>';
		}
	}
	else
	{
		$tableau_produit = array(
			'reference'			=>	$_POST["reference"],
				'nom'			=>	$_POST["nom"],
				'prix'		=>	$_POST["prix"],
				'quantite'		=>	$_POST["quantite"],
				'image'		=>	$_POST["image"]
		);
		$_SESSION["panier"][0] = $tableau_produit;
	}
}



?>



						<li><a href="#"><i class="fa fa-envelope-o"></i>Electro-Talbi@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Rabat CYM </a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a><i class="fa fa-dollar"></i> DH</a></li>
						<li><a href="authentifie.php"><i class="fa fa-user-o"></i> Compte Client</a></li>
						<li><a href="registre.php"><i class="fa fa-user-o"></i> Créer un compte</a></li>
						<li><a href="authentifie.php?admin=''"><i class="fa fa-user-o"></i> Compte Administrateur</a></li>
						<li><a href="deconnecter.php"><i class="fa fa-user-o"></i> Déconnecter</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form  method="GET" action="recherche.php">

									<select class="input-select" name="cate">
								    <option value="tous">Tous</option>
									<option value="ordinateur">Ordinateur</option>
                                    <option value="accessoire">Accessoires</option>
                                    <option value="camera">Camera</option>
                                    <option value="televiseur">Téléviseur</option>
                                    <option value="imprimantes">imprimantes</option>
                                    <option value="smartphone">smartphones</option>

									</select>
									<input class="input" placeholder="Cherche ici" type="text" name="chercher" >
									<button class="search-btn" type="submit">Chercher</button>

								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
                          
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
                            

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Mon panier</span>

                          <?php  if(isset($_SESSION["panier"])) {
                                      if(!empty($_SESSION["panier"])) { ?>
								<div class="qty"><?php echo count($_SESSION["panier"]); ?> </div>

                             <?php } else 
                                     {  echo '<div class="qty">0</div>';}}
                                     else 
                                     echo '<div class="qty">0</div>';                                              ?>


									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											
											
										



<?php           if(isset($_SESSION["panier"])){
					if(!empty($_SESSION["panier"]))
					{
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
  
?>


                                 <div class="product-widget">
												<div class="product-img">
													<img src=<?php echo  $image; ?>>
												</div>
												<div class="product-body">
													<h3 class="product-name"><?php echo  $nom; ?></h3>
													<h4 class="product-price"><span class="qty"><?php echo  $quantité; ?> X</span><?php echo  $prix; ?></h4>
												</div>
												<form method="POST"> 	
												<input type="hidden" name="reference" value=<?php echo  $reference; ?> />	
												<button class="delete" name="supprimer" type="submit"><i class="fa fa-close"></i></button>
												</form> 
											</div>

<?php

}
?>										
                                   </div>
										<div class="cart-summary">
											<small><?php echo  $nb; ?> produits selectioné</small>
											<h5>TOTAL: <?php echo  $total; ?> DH</h5>
										</div>


										<div class="cart-btns">
											<a>finaliser -></a>
											<a href="commande.php">commande <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
<?php
}}
?>	

								</div>
								<!-- /Cart -->

								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->



