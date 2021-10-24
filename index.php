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
        


        
		<?php //gestion de client 
        if (isset($_GET['client_supp']))
        	include 'supp_client.html';
        elseif (isset($_GET['client_maj']))
        	include 'maj_client.html';
             
             //gestion de client par admin
        elseif (isset($_GET['maj_client_admin']))
        	include 'maj_client_admin.html';
        elseif (isset($_GET['creer_client_admin']))
        	include 'creer_client_admin.html'; 
        elseif (isset($_GET['supp_client_admin']))
        	include 'supp_client_admin.html';  

        	//gestion de produit  
        elseif (isset($_GET['ajouter_prod']))
        	include 'ajouter_prod.html';   
        elseif (isset($_GET['supp_prod']))
        	include 'supp_prod.html'; 
         elseif (isset($_GET['maj_prod']))
        	include 'maj_prod.html'; 


            //chois de caté
        elseif (isset($_GET['ordinateur']))
        	include 'ordinateur.html';   
        elseif (isset($_GET['accessoire']))
        	include 'accessoire.html'; 
          elseif (isset($_GET['camera']))
        	include 'camera.html'; 
        elseif (isset($_GET['televiseur']))
        	include 'televiseur.html'; 
         elseif (isset($_GET['smartphone']))
        	include 'smartphone.html';
         elseif (isset($_GET['imprimantes']))
        	include 'imprimante.html'; 

           //affiche historique commande
        elseif (isset($_GET['historique']))
            include 'historique.php';
           //affiche commandes
        elseif (isset($_GET['commandes']))
            include 'commandes.php'; 
        //affiche clients
        elseif (isset($_GET['client']))
            include 'affiche.php';
        //affiche avis
        elseif (isset($_GET['avis']))
            include 'avis.php';
  
  
 




        else
        { include 'section.php';
          include 'section_nv_prod.php'; }

		?>


		
	

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
