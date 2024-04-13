<?php
    $servername="localhost";
    $username = "root"; 
    $password= "";
    $port = 3306;
    $database = "vente sir";
    $Nom= $_POST["oui"];
    $ppp= $_POST["ppp"];
    

    //créer la connexion
    $conn=new mysqli($servername, $username, $password, $database, $port);
    
    
    //verifier la connexion
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM client ";
    $res = mysqli_query($conn , $query);
    foreach($res as $row){
        $hh = $row['nomClient'];
        $h= $row['mdp'];
        if($hh == $No&& $h == $ppp){
            echo "Ravi de vous revoir";
            break;
        }
        else{
            continue;
        }
    };
    
?>