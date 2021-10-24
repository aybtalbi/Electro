<?php 
function connectMaBasi(){
$basi=mysqli_connect('localhost:3306','root','','electro');
return $basi;}
?>