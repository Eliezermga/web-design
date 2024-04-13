<?php
    $servername="localhost";
    $username = "root"; 
    $password= "";
    $port = 3306;
    $database = "vente sir";

    //créer la connexion
    $conn=new mysqli($servername, $username, $password, $database, $port);

    
    
    //verifier la connexion
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "<center><strong>Ravis de vous revoir!</strong></center>";
    $id = rand(1000, 9999);
    $nom= $conn->real_escape_string($_POST["No"]);
    $password= $conn->real_escape_string($_POST["ppp"]);
    $query= 'insert into client (noClient, nomClient, mdp) values ('.$id.',"'. $nom.'","' .$pwd.'")';
    $result= mysqli_query($conn, $query);

?>