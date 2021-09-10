 <?php

if (isset($_POST)){

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $nomutilisateur = $_POST["nomutilisateur"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword  = $_POST["confpassword"];

    require_once 'dbh.inc.php';
    require_once 'fonctions.php';
    if(emptyInputSignup($prenom, $nom, $nomutilisateur, $email, $password, $confpassword) !== false){
        header('location:connexion.php?error=emptyinput');
        exit();   
    }
    if(invalidusername($nomutilisateur) !== false){
        header('location:connexion.php?error=invalidusername');
        exit();   
    }
    if(invaliduemail($email) !== false){
        header('location:connexion.php?error=invaliduemail');
        exit();   
    }
    if(PwMatch($password ,$confpassword) !==false){
        header('location:connexion.php?error=passwordnotmatch');
        exit();   
    }
    if(usernameExists($conn ,$nomutilisateur, $email) !== false){
        header('location:connexion.php?error=usernametaken');
        exit();   
    }
    createUser($conn ,$prenom, $nom, $nomutilisateur, $email, $password);

}else{
    header('location:connexion.php');
    // to stop executing
    exit();
}