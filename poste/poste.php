<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURRIER ENVOIYE</title>
    <link rel="icon" href="mmm.ico">
</head>
<body background="EL.jpg">
    <p>
       <h1><font color="green"> Merci d'avoir choisi notre agence</font></h1><br>
        <h2><font color="yellon">vous avez redigé ce qui suit:</font></h2>
    </p>
    <?php
            echo 'Expedition : '.$_POST["expedition"].'<br>';
            echo 'Destination : ' .$_POST["destination"].'<br>';
            echo 'Ville : ' .$_POST["ville"].'<br>';
            echo 'Nbre rue : ' .$_POST["rue"].'<br>';
            foreach($_POST['preference'] as $preference)
            echo 'Preference :' .$preference.'<br>';
            echo 'Description courrier : ' .$_POST["description"].'<br>';
            echo 'Date :' .$_POST["date"].'<br>';
        ?>
</body>
</html>