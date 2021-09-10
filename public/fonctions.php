<?php


    function emptyInputSignup($prenom, $nom, $nomutilisateur, $email, $password, $confpassword){
        $result;
        if(empty($prenom) || empty($nom) || empty($nomutilisateur) || empty($email) || empty($password) || empty($confpassword) ){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    function invalidusername($nomutilisateur) {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $nomutilisateur)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    function invaliduemail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    }
    function PwMatch($password ,$confpassword) {
        $result;
        if($password != $confpassword){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function usernameExists($conn ,$nomutilisateur, $email) {
        $sql = "SELECT * FROM user WHERE userNomUti = ? OR userMail = ?;";
        $stmt = mysqli_stmt_init($conn);
            // to see if theres any source of error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location:connexion.php?error=stmtfailed');
            exit(); 

        }
                    // if it didnt fail
                    // ss= couple of strings(nomutilisat,email)
    mysqli_stmt_bind_param($stmt,"ss", $nomutilisateur, $email );
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else {
        $result =  false;
        return $result;
    }
    mysqli_stmt_close($stmt);
    }

    function createUser($conn ,$prenom, $nom, $nomutilisateur, $email, $password) {
        $sql = "INSERT INTO user (userPre, userNom, userNomUti, userMail, userPass) VALUES (?, ?, ?, ?, ?);";
                // in xamp i actived A_I in the structure
        $stmt = mysqli_stmt_init($conn);
            // to see if theres any source of error or if its goin to fail
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location:connexion.php?error=stmtfailed');
            exit(); 
        }  

    // // to hash the code (crype it) and to not be easy to hack
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    // if it didnt fail
                    // ss= couple of strings(nomutilisat,email)
    mysqli_stmt_bind_param($stmt,"sssss", $prenom, $nom, $nomutilisateur, $email, $hashedPwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
                // it means  theres no error 
    header('location:connexion.php?error=none');
            exit();
    }

            // login page

    function emptyInputLogin($nomutilisateur, $password){
        $result;
        if(empty($nomutilisateur) || empty($password)  ){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $nomutilisateur, $password ){
        // cause we have a OR || int the fnction below so just 1 of them needs to be true
    $uidExists = usernameExists($conn ,$nomutilisateur, $nomutilisateur);

    if ($uidExists === false) {
        header('location:after-connexion.php?error=wronglogin');
        exit(); 
    }

    $pwdHashed = $uidExists["userPass"];
    $chechPwd = password_verify($password, $pwdHashed);

    if ($chechPwd === false) {
        header('location:after-connexion.php?error=wronglogin');
        exit(); 
    }else if($chechPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["usernomuti"] = $uidExists["userNomUti"];
        header('location:index.html ');
            exit(); 
    }
    }

                        //  client page

    function emptyInputClient($NameInput, $NdT, $D){
        $result;
        if( empty($NameInput) || empty($NdT) || empty($D) ){
        $result = true;
        }else{
        $result = false;
                            }
        return $result;
    }

    function invalidusernameClient($NameInput) {
        $result; 
        if(!preg_match("/^[a-zA-Z0-9]*$/", $NameInput)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function createClient($conn ,$NameInput, $NdT, $D) {
        $sql = "INSERT INTO client (nom_cli, num_tele, Date_arr) VALUES ('$NameInput', '$NdT', '$D');";
                // in xamp i actived A_I in the structure
         $stmt = mysqli_stmt_init($conn);
            // to see if theres any source of error or if its goin to fail
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location:client.php?error=stmtfailed');
            exit(); 
        }  
                    // if it didnt fail
    mysqli_stmt_bind_param($stmt,"sss", $NameInput, $NdT, $D );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
                // it means  theres no error 
    header('location:produit.php');
            exit();
    }
    function usernameClientExists($conn ,$NameInput, $NdT ) {
        $sql = "SELECT * FROM client WHERE nom_cli = ?  OR num_tele = ?;";
        $stmt = mysqli_stmt_init($conn);
            // to see if theres any source of error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location:client.php?error=stmtfailed');
            exit(); 

        }
                 // if it didnt fail
                    // ss= couple of strings(nomutilisat,numero)
        mysqli_stmt_bind_param($stmt,"ss",$NameInput, $NdT  );
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($resultData)) {
                 return $row;
             }else {
                 $result =  false;
                 return $result;
    }
    mysqli_stmt_close($stmt);

    }
        
       // produit page
    
    function emptyInputProduit($typePro, $Nameproduit, $NomPre, $TypeTr, $date){
        $result;
             if( empty($typePro) || empty($Nameproduit) || empty($NomPre) || empty($TypeTr) || empty($date) ){
                $result = true;
            }else{
                 $result = false;
            }
            return $result;
    }    

    function createProduit($conn ,$typePro, $Nameproduit, $NomPre, $TypeTr, $date){
        $sql = "INSERT INTO produit (typePro, nomPro, NomPrecli, typeTrait, DatePro ) VALUES ('$typePro', '$Nameproduit','$NomPre', '$TypeTr','$date');";
                // in xamp i actived A_I in the structure
        $stmt = mysqli_stmt_init($conn);
            // to see if theres any source of error or if its goin to fail
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location:produit.php?error=stmtfailed');
            exit(); 
        }  
                    // if it didnt fail
    mysqli_stmt_bind_param($stmt,"sssss", $typePro, $Nameproduit, $NomPre, $TypeTr, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
                // it means  theres no error 
    header('location:produit.php?error=none');
    
            exit();
    }

                        
?>
