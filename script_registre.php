<?php
session_start();
include("connextion.php");
    $bd=connectMaBasi();
    if (!$bd) {
    die("Echec de la connexion");
} 



// creer compte par client

if (isset ($_POST['envoyer'])){

 $prenom=$_POST['first_name'];
 $nom=$_POST['last_name'];
 $date=$_POST['birthday'];
 $genre=$_POST['gender'];
 $id=$_POST['id'];
 $password=$_POST['pass'];


    $sql="INSERT INTO client (prenom,nom,Date,genre,id,password) values ('$prenom','$nom','$date','$genre','$id','$password')";  
    if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"vous êtes inscrit !!\")
         window.location.replace(\"authentifie.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"vous n'êtes pas inscrit !!\")
         window.location.replace(\"registre.php\");
         </script>";
}}


// creer compte par admin
if (isset ($_POST['creer_client_admin'])){

 $prenom=$_POST['first_name'];
 $nom=$_POST['last_name'];
 $date=$_POST['birthday'];
 $genre=$_POST['gender'];
 $id=$_POST['id'];
 $password=$_POST['pass'];

    $sql="INSERT INTO client (prenom,nom,Date,genre,id,password) values ('$prenom','$nom','$date','$genre','$id','$password')";  
    if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Client est ajouté !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Client n'est pas ajouté !!\")
         window.location.replace(\"index.php\");
         </script>";
}}





//supprimer compte par client 
if(isset($_POST['supp_client'])){
     

     $id=$_SESSION['id_client']; //id de compte connecté
     $password=$_POST['pass'];
     $sql="DELETE FROM client WHERE id = '$id' and password = '$password'";
     if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Votre compte est supprimer !!\")
         window.location.replace(\"deconnecter.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"compte n'est pas supprimer !!\")
         window.location.replace(\"deconnecter.php\");
         </script>";
}
  }

  //supprimer compte par admin 
if(isset($_POST['supp_client_admin'])){

     $id=$_POST['id'];
     $sql="DELETE FROM client WHERE id = '$id'";
     if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Compte est supprimer !!\")
         window.location.replace(\"index.php?client=%27%27\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Compte n'est pas supprimer !!\")
         window.location.replace(\"index.php?client=%27%27\");
         </script>";
}
  }






//MAJ compte par client
if(isset($_POST['maj_client'])){
     
     $prenom=$_POST['first_name'];
     $nom=$_POST['last_name'];
     $date=$_POST['birthday'];
     $genre=$_POST['gender'];
     $password=$_POST['pass'];
  
     $id=$_SESSION['id_client']; //id de compte connecté

     $password=$_POST['pass'];
     $sql="UPDATE client SET prenom='$prenom',nom='$nom',date='$date',genre='$genre',password='$password' WHERE id='$id'";
     if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"Votre compte est MAJ !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"Votre compte n'est pas MAJ !!\")
         window.location.replace(\"index.php\");
         </script>";
}
  }
  //MAJ compte par admin
  if(isset($_POST['maj_client_admin'])){
     
     $prenom=$_POST['first_name'];
     $nom=$_POST['last_name'];
     $date=$_POST['birthday'];
     $genre=$_POST['gender'];
     $password=$_POST['pass'];
     $id=$_POST['id'];
     
     $password=$_POST['pass'];
     $sql="UPDATE client SET prenom='$prenom',nom='$nom',date='$date',genre='$genre',password='$password' WHERE id='$id'";
     if(mysqli_query($bd,$sql)){

      echo "<script> 
         alert(\"compte ".$id." est MAJ !!\")
         window.location.replace(\"index.php\");
         </script>";
         }
    else
        {
         
         echo "<script> 
         alert(\"compte ".$id." n'est pas MAJ !!\")
         window.location.replace(\"index.php\");
         </script>";
}
  }



?>