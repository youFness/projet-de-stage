<?php
require_once 'dbh.inc.php';
?>


    <?php
        if (isset($_POST['submit-button'])) {
            // to make sure the database is safe
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM client WHERE nom_cli LIKE '%$search%'  ";
                      // to run the sql inside the database
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
           

            if ($queryResult >0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "il ya ".$queryResult." resultat";
                    echo "<div class='article-box'>
                    <h3>".$row['nom_cli']."</h3>
                    <p>".$row['num_tele']."</p>
                    <p>".$row['Date_arr']."</p>
                    </div>";
                }
            }else {
                echo "introuvable!!!";
            }

        }    
    
    ?>
