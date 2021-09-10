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
        <div class="container-client" >
            <form action="client-input.php" method='post' name="container-client"  id="container-client">
                <fieldset>
                    <legend><h1>Saisie de Client : </h1></legend>
                    <div class="input">
                        <input  type="text" name="NameInput" class="NameInput" placeholder="Nom de client" >
                        <input  type="text" name="NdT" class="NdT" placeholder="Numero de telephone" >
                        <input name="D" class="D"  type="date" >
                        <div class="test">
                            <button class="button" >submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <?php
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "emptyinput"){
                  echo "<p>Fill in all fields!</p>";
                }else if ($_GET["error"] == "invalidusername"){
                    echo "<p> il y a une faute !</p>";
                }else if ($_GET["error"] == "wronglogin"){
                    echo "<p>deja inscrit avec ce nom/numero!</p>";
                }
            }

        ?>
    </div>
    <script src="main.js"></script>
</body>
</html>
