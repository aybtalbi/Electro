<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">


<?php 
     if(!isset($_SESSION['connecter'])){
                                               
                        include("connextion.php");
                        $bd=connectMaBasi();
                         if (!$bd) {
                        die("Echec de la connexion"); }}


     $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit ORDER BY Date DESC";

     $result=mysqli_query($bd,$sql);
      $i=0;
        while($row = mysqli_fetch_array($result, MYSQLI_NUM) and ($i<6))
     {  $prixn = $row[1]-($row[1]*$row[6])/100;
     	echo '

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="'.$row[3].'" alt="" width="300" height="300">
												<div class="product-label">
												<span class="new">NEW</span>
												  <span class="sale">-'.$row[6].' %</span>
												</div>
											</div>
											<div class="product-body">
                                                 
                                                 <h3 class="product-name">'.$row[5].'</h3>
												<p class="product-category">'.$row[2].'</p>
												<p class="product-category">'.$row[4].'</p>
												
												<h4 class="product-price">'.' '.$prixn.' DH'.'<del class="product-old-price">'.' '.$row[1].' DH'.'</del></h4>
												<div class="product-rating">';
													 ///////////// pour afficher note  /////////////////////////////////////////////////////                 
$sql="SELECT note FROM avis where '$row[0]' = id";

     $res=mysqli_query($bd,$sql);
 $j=0;
 $somme=0;
 while($r = mysqli_fetch_array($res, MYSQLI_NUM))
 { $j++;    $somme=$somme+$r[0];}
if($j==0){
					echo '			<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>   ';
}else{
     $n = $somme/$j;
     for($j=0;$j<$n;$j++)
     	{echo '<i class="fa fa-star"></i>';}

}									
echo '

												</div>
												<div class="product-btns">
													
										
													<a href="produit.php?cat='.$row[2].'&ss_cat='.$row[4].'&produit='.$row[0].'&nom='.$row[5].'"><button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> Voir plus</span></button></a>
												</div>
											</div>
											<div class="add-to-cart">
												<form method="POST"> 

								


                        <input type="hidden" name="reference" value="'.$row[0].'" />
                        <input type="hidden" name="image" value="'.$row[3].'" />

						<input type="hidden" name="nom" value="'.$row[5].'" />
		
						<input type="hidden" name="prix" value="'.$prixn.'" />
						<input type="hidden" name="quantite" value="1" />

						<button class="add-to-cart-btn" type="submit" name="ajouter"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
					</form>

											</div>
										</div>
										<!-- /product -->


';
$i++;
}   

  ?>
	
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
