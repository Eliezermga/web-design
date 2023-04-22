<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de voyage</title>
    <link rel="icon" href="avis.ico">
    <link rel="stylesheet" href="../view/css/style1.css">
</head>
<body background="img.jpg">
    <div id="madiv">
    <p>
       <h1 align="center">Merci d'avoir choisi notre agence de voyage</h1><br>
        <h2>vous avez redigé ce qui suit:</h2>
    </p>
    <div id="madiv2">
    <?php
            echo 'depart : '.$_POST["depart"].'<br>';
            echo 'arrivée : ' .$_POST["arrivée"].'<br>';
            echo 'transport : ' .$_POST["TRANSPORT"].'<br>';
            echo 'Prix : ' .$_POST["Prix"].'<br>';
            foreach($_POST['REPAS'] as $REPAS)
            echo 'hobby :' .$REPAS.'<br>';
            echo 'boisson : ' .$_POST["BOISSON"].'<br>';
            echo 'mon avis :' .$_POST["AVIS"].'<br>';
        ?>
    </div>
    </div>
</body>
</html>