<?php

if(isset($_POST)){

$typePro = $_POST['typePro'];
$Nameproduit = $_POST['Nameproduit'];
$NomPre = $_POST['NomPre'];
$TypeTr = $_POST['TypeTr'];
$date = $_POST['date'];

require_once 'dbh.inc.php';
require_once 'fonctions.php';

if(emptyInputProduit($typePro, $Nameproduit, $NomPre, $TypeTr, $date) !== false){
    header('location:produit.php?error=emptyinput');
    exit();   
}


createProduit($conn ,$typePro, $Nameproduit, $NomPre, $TypeTr, $date);

}else{
header('location:produit.php');
exit; 
}



?>