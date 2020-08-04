jQuery.validator.addMethod("maxDate", function(value, element) {
var curDate = new Date();
var cuDate = new Date();
var messg="Invalid Date!";
curDate.setDate(curDate.getDate() + 15);
var inputDate = new Date(value);
if ((inputDate > curDate) || (inputDate <  cuDate ))
    return true;
return false;
 });   // error message

 jQuery.validator.addMethod("timedef", function(value, element) {
   var timedeb = document.getElementsByName("deb")[0].value;
   var timefin = value;
   if (timefin >  timedeb )
      return true;
  return false;
   });

   jQuery.validator.addMethod("mindate", function(value, element) {
     var curDate = new Date();
     var inputDate = new Date(value);
     if (inputDate >  curDate )
        return true;
    return false;
     });

var form = $("#contact");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },

    rules: {
        dat: {
            required: true,
            date: true,
            maxDate: true,
            mindate: true,
        },
        fin :{
          required: true,
          timedef: true,
        },
        cap: {
          required: false,
          range: [0, 150],
        },
        salle: {
          required:true,
        },

    },
    messages: {
       dat:{
           required: "Veuillez entrer la date",
           maxDate: "La reservation doit se faire au moins 15j avant la date de l'événement",
           mindate:"la date devrait être plus grande que la date d'aujourd'hui",
       },
       mat: {
         required:"Veuillez entrer la matricule de l'étudiant résponsable",
       },
       deb:{
           required:"Veuillez entrer l'heure de début",
         },
       fin:{
           required: "Veuillez entrer l'heure de fin ",
           timedef: "L'heure de fin doit être plus grand que l'heure de début",
       },
       salle: {
         required: 'Veuillez entrer le nom de la salle',
       },
       cap: {
          required: 'Veuillez entrer la capacité',
          range : 'La capacité maximale des salle est 150, Veuillez entrer une capacité plus petite',
       },
       descname: {
         required: "Veuillez entrer le nom de l'événement ",
       },
       desc: {
         required: "Veuillez entrer la description de l'événement "
       }

    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "fade",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },

    onFinished: function (event, currentIndex)
    {
        //("Submitted!");
        form.submit();

    }
});
