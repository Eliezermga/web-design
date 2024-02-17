<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../view/css/php.css"/>
  <link rel="shortcut icon" href="../taxi.png" type="image/x-icon">
  <title>UrbanTrans</title>
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['email'])){
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

  $query = "SELECT * FROM `users` WHERE email='$email' AND password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn, $query) or die(mysql_error());
  $rows = mysqli_num_rows($result);

  if ($rows == 1){
      $userData = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $userData['username'];
      $_SESSION['firstname'] = $userData['firstname'];
      header("Location: index.php");
  } else {
    $message = "L'email ou le mot de passe est incorrect.";
  }
}
?>
<div class="wrapper">
  <div class="form-wrapper sign-in">
    <form class="box" action="" method="post" name="login">
      <div class="signUp-link">
        <p><a href="../index.html" class="signInBtn-link" style="font-size: 1.5em;">URBANTRANS</a></p>
      </div>
      <h2>Se connecter</h2>
      <div class="input-group">
        <input type="email" class="box-input" name="email" placeholder="E-mail" required>
      </div>
      <div class="input-group">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required>
      </div>
      <input type="submit" value="Connexion" name="submit" class="box-button">
      <div class="signUp-link">
        <p>Vous n'avez pas de compte ? <a href="register.php" class="signInBtn-link">S'enregistrer</a></p>
      </div>
      <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
      <?php } ?>
    </form>
  </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
