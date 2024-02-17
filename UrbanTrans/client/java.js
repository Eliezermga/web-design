var ka=document.getElementById("ka");
var k=document.getElementById("k");
var kiwele=document.getElementById("kiwele");
var kenya=document.getElementById("kenya");
var rwashi=document.getElementById("rwashi");
var kamalondo=document.getElementById("kamalondo");
var belair=document.getElementById("belair");
var kenya=document.getElementById("kenya");
var kamalondo=document.getElementById(" Kamalondo");
k.onclick=function(){
    var a=500;
    /*/pour kiwele/*/
 
   if (choix.value=="kiwele"){
    switch("kiwele") {
        case "kamalondo":
            alert("payer 100");
         break
         case "kiwele":
            alert("payer 50");
         break
         case "kasapa":
            alert("payer 500");
         break
         case "kenya":
            alert("payer 200");
         break
         case "rwashi":
            alert("payer 300");
         break
         
         
      }
   }
   /*/fin kiwele/*/
    /*/  pour kasapa/*/
   if (choix.value=="kasapa"){
    switch("kasapa") {
        case "kamalondo":
            alert("payer 100");
         break
         case "kiwele":
            alert("payer 300");
         break
         case "kasapa":
            alert("payer 500");
         break
         case "kenya":
            alert("payer 200");
         break
         case "rwashi":
            alert("payer 300");
         break
      }
   } 
   /*/  fin kasapa/*/
   /*/  pour kamalondo/*/
   if (choix.value=="kamalondo"){
    switch("kamalondo") {
        case "kamalondo":
            alert("payer 500");
         break
        
         case "kiwele":
            alert("payer 300");
         break
         case "kasapa":
            alert("payer 500");
         break
         case "kenya":
            alert("payer 200");
         break
         case "rwashi":
            alert("payer 300");
         break
        
      }
   }
   /*/ fin kamalondo/*/ 
  
   /*/  fin bel-air/*/
   /*/  pour kamalondo/*/
  
   if (choix.value=="kenya"){
    switch("kenya") {
        case "kamalondo":
            alert("payer 100");
         break
         case "kiwele":
            alert("payer 300");
         break
         case "kasapa":
            alert("payer 500");
         break
         case "kenya":
            alert("payer 500");
         break
         case "rwashi":
            alert("payer 300");
         break
      }
   } 
   /*/  fin kasapa/*/
   /*/  pour kenya/*/
  
   if (choix.value=="rwashi"){
    switch("rwashi") {
        case "kamalondo":
            alert("payer 100");
         break
         case "kiwele":
            alert("payer 300");
         break
         case "kasapa":
            alert("payer 500");
         break
         case "kenya":
            alert("payer 200");
         break
         case "rwashi":
            alert("payer 500");
         break
         
      }
   } 
   
  

}
