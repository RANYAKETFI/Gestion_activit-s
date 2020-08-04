


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
var dd=document.getElementById("date1");
var df=document.getElementById("date2");

  df.addEventListener("input",function(){
    var d1=document.getElementById("date1").value;
    var d2=document.getElementById("date2").value;
    var dd=document.getElementById("date1");

    if (d1>d2) {
   var text= " La date de fin doit dépasser la date de début. ";

    document.getElementById("demo").innerHTML = text;
    setTimeout(function() {
     document.getElementById('demo').innerHTML = "";
    },60000);
   df.style.border = "1px solid #f00",
   df.style.backgroundColor = "#fba";
   dd.style.border = "1px solid #f00",
   dd.style.backgroundColor = "#fba";

}
else {
  if (d1<d2) {
    text= " ";
    document.getElementById("demo").innerHTML = text;
    setTimeout(function() {
     document.getElementById('demo').innerHTML = "";
    },60000);
   df.style.border = "",
   df.style.backgroundColor = "";
   dd.style.border = "",
   dd.style.backgroundColor = "";
  }
}

var df1=document.getElementById("date2").value;
var d=new Date(df1);
var dh=new Date();
var tmp=DateDiff.inDays(dh,d);
if (tmp>=0) {
  text= " La date de fin ne doit pas dépasser la date d'aujourd'hui.";
   document.getElementById("demo").innerHTML = text;
   setTimeout(function() {
    document.getElementById('demo').innerHTML = "";
   },60000);
  df.style.border = "1px solid #f00",
  df.style.backgroundColor = "#fba";

}

});


  document.getElementById("statistique").addEventListener("submit",function()
    {

      var erreur=0;
      var inputs=document.getElementsByTagName("input");
      var date=inputs[0].value;
      var date1=inputs[1].value;

      if (date>date1) {
       alert("  La date de fin doit dépasser la date de début.");
        erreur=1;
        return false;
      }
      var df1=new Date(date1);
      var dh=new Date();
      var tmp=DateDiff.inDays(dh,df1);
      if (tmp>=0) {
        alert("La date de fin ne doit pas depasser la date d'aujourd'hui.");
        erreur=1;
        return false;

      }

    });
