function calculerDistance() {
   var villeDepart = document.getElementById("villeDepart").value;
   var villeArrivee = document.getElementById("villeArrivee").value;

   // Ici, vous pouvez implémenter la logique de calcul de distance entre les deux villes
   // Cela pourrait impliquer une API de cartographie ou une formule basée sur la latitude/longitude, selon vos besoins.

   // Exemple de résultat fictif pour la démonstration
   var distance = Math.floor(Math.random() * 1000); // Distance aléatoire en kilomètres

   document.getElementById("resultatDistance").innerText = "Distance entre " + villeDepart + " et " + villeArrivee + ": " + distance + " km";
}