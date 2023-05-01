var rIndex,
table = document.getElementById("table");

// check the empty input
function checkEmptyInput()
{
var isEmpty = false,
    num = document.getElementById("num").value,
    compte = document.getElementById("compte").value,
    montant = document.getElementById("montant").value;

if(num === ""){
    alert("Veuillez inserez le numero de compte Actif");
    isEmpty = true;
}
else if(compte === ""){
    alert("Veuillez inserez l'untitulé de compte Actif");
    isEmpty = true;
}
else if(montant === ""){
    alert("Veuillez inserez le montant Actif");
    isEmpty = true;
}
return isEmpty;
}

// add Row
function addHtmlTableRow()
{
// get the table by id
// create a new row and cells
// get value from input text
// set the values into row cell's
if(!checkEmptyInput()){
var newRow = table.insertRow(table.length),
    cell1 = newRow.insertCell(0),
    cell2 = newRow.insertCell(1),
    cell3 = newRow.insertCell(2),
    num = document.getElementById("num").value,
    compte = document.getElementById("compte").value,
    montant = document.getElementById("montant").value;

cell1.innerHTML = num;
cell2.innerHTML = compte;
cell3.innerHTML = montant;
// call the function to set the event to the new row
selectedRowToInput();
}
}

// display selected row data into input text
function selectedRowToInput()
{

for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].onclick = function()
    {
      // get the seected row index
      rIndex = this.rowIndex;
      document.getElementById("num").value = this.cells[0].innerHTML;
      document.getElementById("compte").value = this.cells[1].innerHTML;
      document.getElementById("montant").value = this.cells[2].innerHTML;
    };
}
}
selectedRowToInput();

function editHtmlTbleSelectedRow()
{
var num = document.getElementById("num").value,
    compte = document.getElementById("compte").value,
    montant = document.getElementById("montant").value;
if(!checkEmptyInput()){
table.rows[rIndex].cells[0].innerHTML = num;
table.rows[rIndex].cells[1].innerHTML = compte;
table.rows[rIndex].cells[2].innerHTML = montant;
}
}

function removeSelectedRow()
{
table.deleteRow(rIndex);
// clear input text
document.getElementById("num").value = "";
document.getElementById("compte").value = "";
document.getElementById("montant").value = "";
}