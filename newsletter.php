<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Enregistrez-vous pour recevoir  <strong>NEWSLETTER</strong></p>
							<form method="POST">
								<input class="input" type="email" name="email" placeholder="Enter votre Email">
								<button class="newsletter-btn" type="submit" name="newsletter"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.pinterest.fr/"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

<?php
if (isset ($_POST['newsletter'])){

 $email=$_POST['email'];


    $sql="INSERT INTO newsletter (email) values ('$email')";  
    if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Votre email est ajouté !!\")
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Votre email n'est pas ajouté !!\")
         </script>";
}}

?>