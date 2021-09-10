<?php


if(isset($_POST)){

    $nomutilisateur = $_POST['nomutilisateur'];
    $password = $_POST['password'];
    
    require_once 'dbh.inc.php';
    require_once 'fonctions.php';
    
    if(emptyInputLogin($nomutilisateur, $password) !== false){
        header('location:after-connexion.php?error=emptyinput');
        exit();   
    }
    loginUser($conn, $nomutilisateur, $password );
    
}else{
    header('location:after-connexion.php'); 
}



?>