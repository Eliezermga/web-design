<?php
  session_start();

  if(!isset($_SESSION["firstname"])){
    header("Location: login.php");
    exit(); 
  }
?>










<!DOCTYPE html>
<html lang="fr">
  <head>
      <title>UrbanTrans</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="../assets/css/main.css" />
      <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
      <link rel="shortcut icon" href="../taxi.png" type="image/x-icon">
  </head>
  <body class="landing is-preload">
			<div id="page-wrapper">
					<header id="header" class="alt">
						<h1><a href="index.html">UrbanTrans</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span><?php echo $_SESSION['firstname']; ?></span></a>
                  <style>
                    .inner{
                      background-color: #0e0e0e9e;


                    }
                  </style>
									<div id="menu">
										<ul>
											<li><a href="../index.html">Acceuil</a></li>
											<li><a href="../client/contact.html">A Propos</a></li>
											<li id="decon"><a href="logout.php" >Déconnexion</a></li>
                      <style>
                        #decon{
                          color: red;
                        }
                      </style>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
          <section id="banner">
            <style>
              #banner{
                background-image: url(../images/wait.jpg);
                background-size: 100%;
              }
            </style>
						<div class="inner">
							<h2>UrbanTrans</h2>
							<p>Votre taxi est en route <br />
              <?php echo $_SESSION['firstname']; ?> veuillez  patienter pour être transporté.</p>
						</div>
						<a href="#two" class="more scrolly">Voir plus</a>
					</section>
          <section id="two" class="wrapper alt style2">		  </section>
          </section>



          <footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; UB</li><li>Design: <a href="https://eliezermga.github.io/mga/">MGA</a></li>
						</ul>
					</footer>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>


  </body>
</html>