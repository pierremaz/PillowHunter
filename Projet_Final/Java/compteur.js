var setTm=0;
var tmStart=0;
var tmNow=0;
var tmInterv=0;
var tTime=0; 

function affTime(tm){ //affichage du compteur
   var vMin=tm.getMinutes();
   var vSec=tm.getSeconds();
   var vMil=Math.round((tm.getMilliseconds())/10); //arrondi au centième
   if (vMin<10){
      vMin="0"+vMin;
   }
   if (vSec<10){
      vSec="0"+vSec;
   }
   if (vMil<10){
      vMil="0"+vMil;
   }
   document.getElementById("divChrono").innerHTML=vMin+":"+vSec+":"+vMil;
}
function fChrono(){
   tmNow=new Date();
   Interv=tmNow-tmStart;
   tmInterv=new Date(Interv);
   affTime(tmInterv);
}
function fStart(){
   fStop();
   if (tmInterv==0) {
      tmStart=new Date();
   } else { //si on repart après un clic sur Stop
      tmNow=new Date();
      Pause=tmNow-tmInterv;
      tmStart=new Date(Pause);
   }
   setTm=setInterval(fChrono,10); //lancement du chrono tous les centièmes de secondes
}

function fStop(){
   clearInterval(setTm);
   tTime=tmInterv;
}

function fReset(){ //on efface tout
   fStop();
   tmStart=0;
   tmInterv=0;
   tTime=0;
   
   document.getElementById("divChrono").innerHTML="00:00:00";
}