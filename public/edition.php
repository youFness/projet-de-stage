<?php
require_once 'dbh.inc.php';
?>


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
        <div class="edition-div">
            <form action="search.php" method="post">
                <div class="edition-div-barre">
                    <input type="text" name="search" placeholder="saisire le Nom du client">
                    <button type='submit' name='submit-button'>chercher</button>
                </div>
            </form>
            <!-- <div class="article-container">
            <?php
                        $sql = "select * from client;";
                        $result = mysqli_query($conn, $sql);
                        // to calculate the number of ligns
                        $queryResults = mysqli_num_rows($result);
                            if ($queryResults >0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div class='article-box'>
                                    <h3>".$row['nom_cli']."</h3>
                                    <p>".$row['num_tele']."</p>
                                    <p>".$row['Date_arr']."</p>
                                    </div>";
                                }
                                   
                            }

                    ?>
                   
           
            
        </div>
         -->
    </div>
    <script src="main.js"></script>
</body>