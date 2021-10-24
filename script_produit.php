<?php
session_start();
include("connextion.php");
    $bd=connectMaBasi();
    if (!$bd) {
    die("Echec de la connexion");
} 




// ajouter produit

if (isset ($_POST['ajouter_prod'])){

 $reference=$_POST['reference'];
 $prix=$_POST['prix'];
 $remise=$_POST['remise'];
 $nom=$_POST['nom'];
 $designation=mysqli_real_escape_string($bd,$_POST['designation']);
 $categorie=$_POST['categorie'];
 $sous_categorie=$_POST['sous_categorie'];
 
 $image = mysqli_real_escape_string($bd,"img/".$reference.".png");
 $traget = "img/".$reference.".png";
 move_uploaded_file($_FILES['image']['tmp_name'], $traget);


   $sql="INSERT INTO produit (reference,prix,designation,categorie,sous_categorie,image,nom,remise) values ('$reference','$prix','$designation','$categorie','$sous_categorie','$image','$nom',$remise)";  
    if(mysqli_query($bd,$sql)){

     echo "<script> 
         alert(\"Produit est ajouté !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Produit n'est pas ajouté  !!\")
         window.location.replace(\"index.php\");
         </script>";
}}



// supprimer produit

if (isset ($_POST['supp_prod'])){

 $reference = mysqli_real_escape_string($bd,$_POST['reference']);

 $image = mysqli_real_escape_string($bd,"img/".$reference.".png");
   if( file_exists ( $image))
     unlink( $image ) ;

$sql="DELETE FROM produit WHERE reference = '$reference'";

    if(mysqli_query($bd,$sql)){
     echo "<script> 
         alert(\"Produit est supprimé !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         echo "<script> 
         alert(\"Produit n'est pas supprimé  !!\")
         window.location.replace(\"index.php\");
         </script>";
}}


// Maj produit

if (isset ($_POST['maj_prod'])){

 $reference = mysqli_real_escape_string($bd,$_POST['reference']);
 $prix=$_POST['prix'];
 $remise=$_POST['remise'];
 $nom=$_POST['nom'];
  $designation=mysqli_real_escape_string($bd,$_POST['designation']);
 $categorie=$_POST['categorie'];
  $sous_categorie=$_POST['sous_categorie'];

 //remplacer image dans dossier !!
$image = mysqli_real_escape_string($bd,"img/".$reference.".png");
   if( file_exists ( $image))
     unlink( $image ) ;
 $traget = "img/".$reference.".png";
 move_uploaded_file($_FILES['image']['tmp_name'], $traget);


$sql="UPDATE produit SET prix='$prix',designation='$designation',categorie='$categorie',sous_categorie='$sous_categorie',image='$image' ,nom='$nom' ,remise='$remise' WHERE reference='$reference'";

    if(mysqli_query($bd,$sql)){
     echo "<script> 
         alert(\"Produit est Maj !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
        echo "<script> 
         alert(\"Produit n'est pas Maj  !!\")
         window.location.replace(\"index.php\");
         </script>";
}}






?>