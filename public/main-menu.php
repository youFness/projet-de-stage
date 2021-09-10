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
            <ul class="home-button">
                <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            </ul>
        </div>
    </header>

    <div class="Home">
        <div class="main-menu">
            <div class="main-menu-info">
                <p>Nom de Client : </p> <br>
                    <?php
                        $sql = "select * from produit;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck >0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['NomPrecli'] . "<br>"; 
                                }
                                   
                            }

                    ?>
                <p>Nom de Produit : </p><br>
                <?php
                        $sql = "select * from produit;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck >0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['nomPro'] . "<br>"; 
                                }
                                   
                            }

                    ?>
                <p>Type de Produit : </p><br>
                <?php
                        $sql = "select * from produit;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck >0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['typePro'] . "<br>"; 
                                }
                                   
                            }

                    ?>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
