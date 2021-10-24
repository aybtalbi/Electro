
<!DOCTYPE html>
<html>
	
     <?php //insertion de head html 
		include 'head.html';
	   ?>
	<body>
    <?php //insertion de head html 
    include 'header.php';
    ?>


   <?php //insertion de head html
   if (isset($_GET['admin']))
      $_SESSION['admin']='ok';

   include 'authentifie.html';
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
