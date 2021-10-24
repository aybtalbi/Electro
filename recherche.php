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
        


	<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
					

						<!-- aside Widget -->
						<div class="aside">
							<h4 class="aside-title">Recherche Détaillée :</h4>
							
							<div class="store-sort">
					<form method="GET" action="recherche.php">

                                <div class="aside">
						    <b>prix MIN :</b><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prix MAX :</b>
							<div class="price-filter">
								<div class="input-number price-min">
									<input  type="number" value="0" name="min">
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input  type="number" value="999999" name="max">
								</div>
						       	</div>
						       	<br> 
						          </div>

								<label>
									<b>trier par  :</b>
									<select class="input-select" name="ordre">
										<option value="prix">Prix</option>
										<option value="nom">Nom</option>
									</select>
								</label><br> </br>

								<label>
									<b>Type de tri :</b>
									<select class="input-select" name="trie">
										<option value="ASC">Ascendant</option>
										<option value="DESC">Descendant</option>
									</select>
								</label></br> </br>

								<label>
									<b>Catégorie :</b></br>
					    	<select class="input-select" onChange="addOption(this.value);" name="cate">
					    		    <option value="tous">Tous</option>
                                    <option value="ordinateur">Ordinateur</option>
                                    <option value="accessoire">Accessoires</option>
                                    <option value="camera">Camera</option>
                                    <option value="televiseur">Téléviseur</option>
                                    <option value="imprimantes">imprimantes</option>
                                    <option value="smartphone">smartphones</option>
                                </select>
								</label></br> </br>


								<label>
									<b>Sous Catégorie :</b></br>
							   <select id="aa" class="input-select" name="ss_cate">
							   	 <option value="tous">Tous</option>
                               </select>

								</label></br> </br>

								<button class="btn btn-danger" type="submit" name="recherche_d">Chercher</button>

							</form>

							</div>
						</div>
						<!-- /aside Widget -->
						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
					

						<!-- store products -->
						<div class="row">
							

							<div class="clearfix visible-sm visible-xs"></div>

<?php  

if(isset($_GET['recherche_d']))
{
    $ordre = $_GET['ordre'];
    $trie = $_GET['trie'];
    $cate = $_GET['cate'];
    $ss_cate = $_GET['ss_cate'];
    $chercher = $_SESSION['chercher'];
    $min = $_GET['min'];
    $max = $_GET['max'];

if($cate == "tous")
  
	$sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit where nom LIKE '%$chercher%' and prix BETWEEN $min AND $max ORDER BY $ordre $trie";

elseif($ss_cate == "tous")
   
    $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit where nom LIKE '%$chercher%' and categorie = '$cate'  ORDER BY $ordre $trie";

else

    $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit where nom LIKE '%$chercher%' and categorie = '$cate' and sous_categorie = '$ss_cate'  ORDER BY $ordre $trie";
}

else{

     $cate = $_GET['cate'];
     $chercher = $_GET['chercher'];
     $_SESSION['chercher'] = $chercher;
    
if($cate!="tous")
     $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit where categorie = '$cate' and nom LIKE '%$chercher%' ORDER BY nom ";
 else
 	 $sql="SELECT reference,prix,categorie,image,sous_categorie,nom,remise,designation FROM produit  where nom LIKE '%$chercher%' ORDER BY nom";


}





     $result=mysqli_query($bd,$sql);
 
        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
     {   $prixn = $row[1]-($row[1]*$row[6])/100;
     	echo '
                                  	<!-- product -->
							<div class="col-md-4 col-xs-6">

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="'.$row[3].'" alt="" width="300" height="300">
												<div class="product-label">
												  <span class="sale">-'.$row[6].' %</span>
												</div>
											</div>
											<div class="product-body">

												 <h3 class="product-name">'.$row[5].'</h3>
												<p class="product-category">'.$row[2].'</p>
												<p class="product-category">'.$row[4].'</p>
												<h4 class="product-price">'.' '.$prixn.' DH'.'<del class="product-old-price">'.' '.$row[1].' DH'.'</del></h4>
												<div class="product-rating">
												';
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

									</div>

';}   

  ?>                 
						</div>
						<!-- /store products -->

						
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





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
		<script type="text/javascript">

  function addOption(par){
    var select = document.getElementById("aa");
    

     if(par=='tous'){
  select.innerHTML = "";}



    if(par=='ordinateur'){
  select.innerHTML = "<option value='tous'>Tous</option><option value='pc portable gamer'>Pc Protable Gamer</option><option value='pc portable notebook'>Pc Protable NoteBook</option><option value='pc portable ultrabook'>Pc Protable UltraBook</option><option value='pc portable macbook'>Pc Protable MacBook</option><option value='pc bureau desktop'>Pc Bureau Desktop</option><option value='pc bureau All In One'>Pc Bureau All in One</option>";}

    if(par=='televiseur'){
  select.innerHTML = "<option value='tous'>Tous</option><option value='LED Smart TV'>LED Smart TV</option><option value='LED TNT'>LED TNT</option><option value='autre'>Autres</option>";
}

      if(par=='camera'){
  select.innerHTML = "<option value='tous'>Tous</option><option value='APPAREIL PHOTO COMPACT'>APPAREIL PHOTO COMPACT</option><option value='APPAREIL PHOTO REFLEX'>APPAREIL PHOTO REFLEX</option><option value='APPAREIL PHOTO BRIDGE'>APPAREIL PHOTO BRIDGE</option><option value='CAMERA NUMERIQUE SPORT'>CAMÉRA NUMÉRIQUE SPORT</option><option value='Autre'>Autres</option>";
}
      if(par=='accessoire'){
  select.innerHTML = " <option value='tous'>Tous</option><option value='claviers'>claviers</option><option value='casques'>casques</option><option value='souries'>souries</option><option value='Autres'>Autres</option> ";
}
      if(par=='imprimantes'){
  select.innerHTML = " <option value='tous'>Tous</option><option value='IMPRIMANTE JET ENCRE'>IMPRIMANTE JET D'ENCRE</option><option value='IMPRIMANTE LASER'>IMPRIMANTE LASER</option><option value='autres'>Autres</option> ";
}
      if(par=='smartphone'){
  select.innerHTML = " <option value='tous'>Tous</option><option value='Telephone Android'>Telephone Android</option><option value='Telephone Iphone'>Telephone Iphone</option><option value='Tablet Android'>Tablet Android</option><option value='Tablet Ipad'>Tablet Ipad</option><option value='autre'>autre</option>";
}
}

</script>

	</body>
</html>
