var row = 1;

var entry = document.getElementById("entry");
entry.addEventListener("click", displayDetails);

/--partie passif en dessous--/
function displayDetails(){
    var num = document.getElementById("num").value;
    var compte = document.getElementById("compte").value;
    var montant = document.getElementById("montant").value;

    if(!num || !compte || !montant){
        alert("Remplissez toutes les cases d'actif svp");
        return;
    }

    var display = document.getElementById("display");

    var newRow = display.insertRow(row);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML = num;
    cell2.innerHTML = compte;
    cell3.innerHTML = montant;

    row++;

}
var table = document.getElementById("display"), sumVal = 0;
getSum();

function getSum()
{
  for(var i = 1; i < table.rows.length; i++){
         sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
  }
  document.getElementById("sumV").innerHTML = sumVal;
   console.log("Sum => "+sumVal);        
}








var rowp = 1;

var entryp = document.getElementById("entryp");
entryp.addEventListener("click", displayDetailsp);


function displayDetailsp(){
    var nump = document.getElementById("nump").value;
    var comptep = document.getElementById("comptep").value;
    var montantp = document.getElementById("montantp").value;

    if(!nump || !comptep || !montantp){
        alert("Remplissez toutes les cases du passif svp");
        return;
    }

    var displayp = document.getElementById("displayp");

    var newRowp = displayp.insertRow(rowp);

    var cell4 = newRowp.insertCell(0);
    var cell5 = newRowp.insertCell(1);
    var cell6 = newRowp.insertCell(2);

    cell4.innerHTML = nump;
    cell5.innerHTML = comptep;
    cell6.innerHTML = montantp;

    rowp++;
}