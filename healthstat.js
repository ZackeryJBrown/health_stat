$(document).ready(function(){
//required modules and APIs
//node.js
//mysql2
//jquery3.6.0


var sysObj = document.getElementById("sysfield");
var diaObj = document.getElementById("diafield");
var pulseObj = document.getElementById("pulsefield");
var submitButtonObj = document.getElementById("submitbutton");
var userInputsValid = true;


var formArray = {
  "sysValue"  : 0,
  "diaValue"  : 0,
  "pulseValue": 0
};




function argsValid(argsArray){
  for (var storedInputs in argsArray){
    
    //input restrictions
    if ((argsArray[storedInputs] == null) || 
        (argsArray[storedInputs] == "") || 
        (typeof(argsArray[storedInputs]) == !Number) || 
        (argsArray[storedInputs] == undefined) || 
        (argsArray[storedInputs] <= 0) || 
        (argsArray[storedInputs] >= 300)) {
      userInputsValid = false;
    } else {
      userInputsValid = true;
    }
  };
};

//Submit click event
$(submitButtonObj).click(function(event) {
    formArray["sysValue"] = parseInt(sysObj.value);  
    formArray["diaValue"] = parseInt(diaObj.value);
    formArray["pulseValue"] = parseInt(pulseObj.value);

    //checking input validity
    argsValid(formArray);
    

    if (!userInputsValid){
      event.preventDefault();
      alert("Input was not valid, it must be a number between 0-300.");
      
    } else {
      
      //note to self, incomingData is the variable passed to the php file, formArray stored into that
      //second function(data, status) performs data response from php file
      $.post("includes/datahandler.php", {
        incomingData: formArray
      }, function(data, status){
          alert(data); 
          });

      
      alert("Data submitted Successfully");
    };
    
    //clear entries
    
  });




});
