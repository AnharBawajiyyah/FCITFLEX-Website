var helpArray = [ "Enter your name in this input box.",
  "Enter your e-mail address in the format user@domain.",
  "Select your country.",
  "Enter any comments here that you'd like us to read.",
  "Click this button to submits the form to the server-side script.", "" ];
var helpText;


function init()
{
   helpText = document.getElementById( "helpText" );
   
   addHelper(document.getElementById( "fname" ), 0 );
   addHelper(document.getElementById( "email" ), 1 );
   addHelper(document.getElementById( "country" ), 2 );
   addHelper(document.getElementById( "subject" ), 3 );
   addHelper(document.getElementById( "submit" ), 4);

  var myForm = document.getElementById( "myForm" );
   myForm.addEventListener( "submit", 
      function(){return confirm( "Are you sure you want to submit?" );},false );
} 


function addHelper( object, messageNumber )
{
   object.addEventListener( "focus", 
      function() { helpText.innerHTML = helpArray[ messageNumber ]; },
      false );
   object.addEventListener( "blur", 
      function() { helpText.innerHTML = helpArray[ 5 ]; }, false );
} 

window.addEventListener( "load", init, false );