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
                background-image: url(../images/welcome2.jpg);
                background-size: 100%;
              }
            </style>
						<div class="inner">
							<h2>UrbanTrans</h2>
							<p>Bienvenue à vous  <br />
              <?php echo $_SESSION['username']; ?> 
              <?php echo $_SESSION['firstname']; ?></p>
						</div>
						<a href="#two" class="more scrolly">Voir plus</a>
					</section>
          <section id="two" class="wrapper alt style2">
            <section class="spotlight">
            <div class="image"><iframe width="600" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=710&amp;height=361&amp;hl=en&amp;q=2465%20route%20kasapa%20Lubumbashi+(urbantrans)&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                
              <div class="content">
                <p>1Km vaut 1500Fc</p>
                <label for="Depart">Départ:</label>
                    <select id="Depart">
                        <option value="Ville">Ville</option>
                        <option value="Golf Malela">Golf Malela</option>
                        <option value="Kasapa">Kasapa</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Joli cité">Marseille</option>
                    </select>

                    <label for="Arrivee">Destination :</label>
                    <select id="Arrivee">
                        <option value="Ludo">Ludo</option>
                        <option value="Matshipisha">Matshipisha</option>
                        <option value="Rwashi">Rwashi</option>
                        <option value="Ville">Ville</option>
                        <option value="Golf faustin">Golf faustin</option>
                        <option value="Cra">Cra</option>
                    </select>
                  
                    <button onclick="calculerDistance()">Calculer la Distance</button>

                    <p id="resultatDistance"></p>
                    <p id="prixtot"></p>
                    <button id="voirPlusBtn" style="display: none;" onclick="afficherPlusInfos()">Payer</button>
                    </div>  


    
                </div>
					  </section>
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
    <script>
                        function calculerDistance() {
                            const prix = 1500;
                            var Depart = document.getElementById("Depart").value;
                            var Arrivee = document.getElementById("Arrivee").value;


                            var distance = Math.floor(Math.random() * 30); // Distance aléatoire en kilomètres
                            var total = distance * prix
                            document.getElementById("resultatDistance").innerText = "Distance entre " + Depart + " et " + Arrivee + ": " + distance + " km";
                            document.getElementById("prixtot").innerText = "La distance est de " + distance + " km  soit un total de : " + total + " Fc";

                            var voirPlusBtn = document.getElementById("voirPlusBtn");
                            voirPlusBtn.style.display = 'block';
                         }  

                        function afficherPlusInfos() {
                          window.location.href = 'final.php';
                                        }
                    </script>

  </body>
</html>