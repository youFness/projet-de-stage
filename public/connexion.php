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
        <form action="signup.php" method='post' class="signup-form" id="signup-form">
             <fieldset>
             <legend><h1>Nouveau creation : </h1></legend>
          <div class="prenom">
              <p>Prénom</p>
              <input  type="text" name="prenom" class="prenom" placeholder="">
          </div>
          <div class="nom">
            <p>Nom</p>
            <input  type="text" name="nom" class="nom" placeholder="">
          </div>
          <div class="nomutilisateur">
              <p>nom de l'utilisateur</p>
            <input  type="text" name="nomutilisateur" class="nomutilisateur" placeholder="">
          </div>
          <div class="email">
            <p>Addresse Email</p>
          <input  type="email" name="email" class="email" placeholder="exemple@gmail.com">
        </div>
        <div class="Motdepasse">
            <p>Saisire le Code</p>
            <div class="motdepasse1">
            <input  type="password" name="password" id="password" class="password" placeholder="">
            <!-- <label for="password"></label> -->
            <i class="pass-icon fas fa-eye"></i>
        </div>  
        </div>
        <div class="confirmerMotdepasse">
            <p>Confirmer votre Code</p>
          <input  type="password" name="confpassword" class="confpassword" placeholder="">
         
        </div>
        <div class="button">
        <button class="button" >submit</button>
        </div>
        </form>
        </div>  

        <?php
   if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";
    }else if ($_GET["error"] == "invalidprenom"){
      echo "<p>Fill in the prenom!</p>";
    }else if ($_GET["error"] == "invalidnom"){
      echo "<p>Fill in the nom!</p>";
    }else if ($_GET["error"] == "invalidusername"){
      echo "<p>Fill in the username!</p>";
    }else if ($_GET["error"] == "invaliduemail"){
      echo "<p>Fill in the email!</p>";
    }else if ($_GET["error"] == "passwordnotmatch"){
      echo "<p>Fill in the password!</p>";
    }else if ($_GET["error"] == "stmtfailed"){
      echo "<p>something went wrong!</p>";
    }else if ($_GET["error"] == "usernametaken"){
      echo "<p>username already taken!</p>";
    }else if ($_GET["error"] == "none"){
      echo "<p>you have signed up!</p>";
    }
    
    
   }

   ?>
    </div>
    <script src="main.js"></script>

   
   
</body>    
