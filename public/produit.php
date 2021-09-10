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
                <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            </ul>
        </div>
    </header>

    <div class="Home">
        <div class="container-menu">
          <form action="produit-input.php" method='post' class="produit-form" id="produit-form">
              <fieldset>
               <legend><h1>Saisie de Produit : </h1></legend>
                <div class="container-lol">
                    <div class="div-menu">
                        <div class="selection-div">
                            <p>Choisir le Type de Produit :</p>
                            <input  type="text" name="typePro" class="typePro" placeholder="" >
                        </div>
                        <div class="selection-div">
                            <p>Saisir le nom de  Produit</p>
                            <input  type="text" name="Nameproduit" class="Nameproduit"  placeholder="" >
                        </div>
                        <div class="selection-div"> 
                            <p> Nom et Prénom du client :</p> 
                            <input  type="text" name="NomPre" class="NomPre"  placeholder=""  >
                        </div>
                       <div class="selection-div">
                            <p>Choisir le Type de Traitement :</p>
                            <input  type="text" name="TypeTr" class="TypeTr" placeholder=""  >
                        </div>
                            <p>Date d'enregistrement :</p>
                            <input type="date"  name="date" class="date" >
                        </div>
                        <button class="button">submit</button>
                    </div>
              </fieldset>
           </form>  
        </div>
        <?php
   if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";

    }else{
        echo "<p>fill up was successfully</p>";
    }
   }

   ?>
    </div>


    <script src="main.js"></script>
</body>
</html>