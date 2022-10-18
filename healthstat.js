$(document).ready(function(){
//required modules and APIs
//node.js
//mysql2
//jquery3.6.0

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

function grabVals(){
  formArray["sysValue"] = parseInt($("#sysfield").val());  
  formArray["diaValue"] = parseInt($("#diafield").val());
  formArray["pulseValue"] = parseInt($("#pulsefield").val());
};

//Submit click event
$(submitButtonObj).click(function(event) {
    grabVals();

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
  });
});
