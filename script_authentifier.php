<?php
session_start();
include("connextion.php");
    $bd=connectMaBasi();
    if (!$bd) {
    die("Echec de la connexion");
} 

//connecter 
if (isset($_POST['connecter'])){

           if ($_SESSION['admin'] == 'ok')             
            {  
                $nbr=0;     
            $sql = 'SELECT COUNT(*) FROM admin WHERE id = ? AND password = ?';
            $req = mysqli_prepare($bd,$sql); 
            
            mysqli_stmt_bind_param($req,'ss',$_POST['id'],$_POST['pass']);
            
            mysqli_stmt_execute($req);

            mysqli_stmt_bind_result($req,$nbr);

            Mysqli_stmt_fetch($req);

            if($nbr==1)
            {    
                     

              $_SESSION['connecter'] = 'admin';
                $_SESSION['id_admin']=$_POST['id']; 
                header("Location: index.php");
            }
            else
            {
                header("Location: authentifie.php?admin=''");
            }}        


            else{
                  
            $nbr=0;     
            $sql = 'SELECT COUNT(*) FROM client WHERE id = ? AND password = ?';
            $req = mysqli_prepare($bd,$sql); 
            
            mysqli_stmt_bind_param($req,'ss',$_POST['id'],$_POST['pass']);
            
            mysqli_stmt_execute($req);

            mysqli_stmt_bind_result($req,$nbr);

            Mysqli_stmt_fetch($req);

            if($nbr==1)
            {     
                     

                $_SESSION['connecter'] ='client';
               $_SESSION['id_client']=$_POST['id']; 
                header("Location: index.php");
            }
            else
            {
                header("Location: authentifie.php");
            }}
}




?>