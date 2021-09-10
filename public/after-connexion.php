<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>media telecom</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="Barre">
            <img class="logoimage" src="media-telecom-logo-1613936272.jpg" alt="">
            <ul>
                <li><a class="test" href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            </ul>
        </div>
    </header>

    <div class="Home">
        <div class="inscription">
        <form action="login.php" method='post' class="login-form" id="login-form">
             <fieldset>
             <legend><h1> Se Connecter : </h1></legend>
        <div class="nomutilisateur">
            <p>nom de l'utilisateur</p>
            <input  type="text" name="nomutilisateur" class="nomutilisateur" placeholder="">
        </div>
        
        <div class="Motdepasse">
            <p>Saisire le Code</p>
            <div class="motdepasse1">
            <input  type="password" name="password" id="password" class="password" placeholder="">
            <label for="password"></label>
            <i class="pass-icon fas fa-eye"></i>
        </div>
        <div class="button">
            <button class="connecter" type="submit" >submit</button>
        </div>
        <div class="creeacc">
            <p>nouveau connexion</p>
        </div>
        
        </form>
        </div> 
 <?php
   if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";
    }else if ($_GET["error"] == "wronglogin"){
      echo "<p>incorrect login!</p>";
    }
   }

   ?>
    </div>
    <script src="main.js"></script>
</body>    