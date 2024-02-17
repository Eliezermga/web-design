<?php
require('config.php');

// Initialisation de la variable d'erreur
$error_message = "";

if (isset($_REQUEST['username'], $_REQUEST['firstname'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['phone'], $_REQUEST['birthdate'], $_REQUEST['birthplace'], $_REQUEST['gender'])) {
    // récupération de valeurs et suppression des antislashes ajoutés par le formulaire
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);

    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($conn, $firstname);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($conn, $phone);

    $birthdate = stripslashes($_REQUEST['birthdate']);
    $birthdate = mysqli_real_escape_string($conn, $birthdate);

    $birthplace = stripslashes($_REQUEST['birthplace']);
    $birthplace = mysqli_real_escape_string($conn, $birthplace);

    $gender = stripslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($conn, $gender);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    // Vérification si l'e-mail est déjà utilisé
    $check_email_query = "SELECT * FROM users WHERE email='$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_email_result) > 0) {
        // L'e-mail existe déjà, afficher l'erreur
        $error_message = "L'email saisi est déjà utilisé.";
    } else {
        // Vérification du mot de passe
        if (strlen($password) < 8 || !preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $password)) {
            $error_message = "Le mot de passe doit avoir au moins 8 caractères et symbole.";
        } else {
            // L'e-mail est unique et le mot de passe est valide, procéder à l'insertion
            $query = "INSERT into users (username, firstname, email, phone, birthdate, birthplace, gender, password) 
                      VALUES ('$username', '$firstname', '$email', '$phone', '$birthdate', '$birthplace', '$gender', '" . hash('sha256', $password) . "')";

            // Exécuter la requête sur la base de données
            $res = mysqli_query($conn, $query);

            if ($res) {
                $error_message = '<p>Inscription Réussie. <a class="signInBtn-link" href="login.php">Connectez-vous</a></p>';
            } else {
                // Une erreur s'est produite pendant l'insertion
                $error_message = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../view/css/php.css" />
    <style>
        .wrapper {
            margin: 100px;
        }
    </style>
    <link rel="shortcut icon" href="../taxi.png" type="image/x-icon">
    <title>UrbanTrans</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form class="box" action="" method="post">
                <div class="signUp-link">
                    <p><a href="../index.html" class="signInBtn-link" style="font-size: 1.5em;">URBANTRANS</a></p>
                </div>
                <h2 class="box-title">Inscription</h2>
                <?php
                // Afficher l'erreur si elle existe
                if (!empty($error_message)) {
                    echo "<div class='error'><p>$error_message</p></div>";
                }
                ?>
                <style>
                    p{
                        text-align:center;
                    }
                </style>
                <div class="input-group">
                    <input type="text" class="box-input" name="username" placeholder="Nom" required />
                </div>
                <div class="input-group">
                    <input type="text" class="box-input" name="firstname" placeholder="Prenom" required />
                </div>
                <div class="input-group">
                    <input type="text" class="box-input" name="email" placeholder="E-mail" required />
                </div>
                <div class="input-group">
                    <input type="tel" class="box-input" name="phone" placeholder="Numéro de téléphone" required />
                </div>
                <div class="input-group">
                    <input type="date" class="box-input" name="birthdate" placeholder="Date de naissance" required />
                </div>
                <div class="input-group">
                    <input type="text" class="box-input" name="birthplace" placeholder="Lieu de naissance" required />
                </div>
                <select name="gender" class="box-input" required>
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                    <option value="other">Autre</option>
                </select>
                <div class="input-group">
                    <input type="password" class="box-input" name="password" placeholder="Mot de passe"  required />
                </div>
                <input type="submit" value="Valider " name="submit" class="box-button">
                <div class="signUp-link">
                    <p>Avez-vous un compte? <a href="login.php" class="signInBtn-link">Se connecter</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
