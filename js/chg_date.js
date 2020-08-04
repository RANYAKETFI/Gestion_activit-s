var DateDiff = {

inDays: function(d1, d2) {
   var t2 = d2.getTime();
   var t1 = d1.getTime();

   return parseInt((t2-t1)/(24*3600*1000));
},

inWeeks: function(d1, d2) {
   var t2 = d2.getTime();
   var t1 = d1.getTime();

   return parseInt((t2-t1)/(24*3600*1000*7));
},

inMonths: function(d1, d2) {
   var d1Y = d1.getFullYear();
   var d2Y = d2.getFullYear();
   var d1M = d1.getMonth();
   var d2M = d2.getMonth();

   return (d2M+12*d2Y)-(d1M+12*d1Y);
},

inYears: function(d1, d2) {
   return d2.getFullYear()-d1.getFullYear();
}
}
var d=document.getElementById("date");
var date=document.getElementById("date").value;

 d.addEventListener("input",function(){
   var date=document.getElementById("date").value;
   var date1=new Date(date);
   var date2=new Date();
   var tmp=DateDiff.inDays(date2,date1);

   if (tmp<15) {
  text= " la réservation doit se faire au moins  15 jours avant l'évènement";
   document.getElementById("demo").innerHTML = text;
   setTimeout(function() {
    document.getElementById('demo').innerHTML = "";
   },60000);
  d.style.border = "1px solid #f00",
  d.style.backgroundColor = "#fba";

}
else {
 text= " ";
 document.getElementById("demo").innerHTML = text;
 setTimeout(function() {
  document.getElementById('demo').innerHTML = "";
 },60000);
d.style.border = "",
d.style.backgroundColor = "";
}

if (tmp<0) {
text= " Cette date est expirée   ! Veuillez entrer une date valide ";
document.getElementById("demo").innerHTML = text;
setTimeout(function() {
document.getElementById('demo').innerHTML = "";
},60000);
d.style.border = "1px solid #f00",
d.style.backgroundColor = "#fba";
}
});
var hd= document.getElementById("nvlhd").value;
var hd1=document.getElementById("nvlhd");
var hf= document.getElementById("nvlhf").value;
var hf1=document.getElementById("nvlhf");


hf1.addEventListener("input",function(){

var hd= document.getElementById("nvlhd").value;
var hf= document.getElementById("nvlhf").value;

var hf1=document.getElementById("nvlhf");
if (hd==""){}
else {
  if (hf<hd)
  {
   text1="L'heure fin doit dépasser l'heure début. ";
   document.getElementById("demo1").innerHTML = text1;
   setTimeout(function() {
    document.getElementById('demo1').innerHTML = "";
    },60000);
      hf1.style.border = "1px solid #f00",
      hf1.style.backgroundColor = "#fba";

  }
  else {
    text1="";
    document.getElementById("demo1").innerHTML = text1;
    setTimeout(function() {
     document.getElementById('demo1').innerHTML = "";
     },60000);
       hf1.style.border = "",
       hf1.style.backgroundColor = "";
       hd1.style.border = "",
       hd1.style.backgroundColor = "";
  }

}
});
      var f=document.getElementById("chg_date");

   f.addEventListener("submit",function(e)
   {

     var erreur=0;
     var inputs=document.getElementsByTagName("input");
     var date=inputs[0].value;
     var date1=new Date(date);

     var date2=new Date();
     var tmp=DateDiff.inDays(date2,date1);

     if (tmp<0) {
       alert("  cette date est expirée");

    erreur=1;
     }
     else {
       if (tmp<7) {
         alert("  la réservation doit se faire au moins 15 jours avant l'evenement !");
         erreur=1;
       }
     }

     var hd= inputs[1].value;
     var hf= inputs[2].value;

    if (hd==""){}
     else {
       if (hf!="")
       {
         if (hf<hd)
         {       erreur=1;

           alert("L'heure fin doit dépasser l'heure début.");

         }
       }


     }
     e=erreur;
     if (erreur==1)
     {
         alert(" Changement echoué");

     }
     else
     {
          alert(" Changement effectué ! ");
     }
   }

 );
