$(document).ready(function(){
    
    //plan to make data table:
    //DONE - make a date (calendar) range selector in html
    //DONE -create sql in that php file to handle the date range query
    //DONE -test that data returned is desired result
    //DONE -returning the results, unhide the html for a table and insert into rows the data from returned array

    var dateArray = {
        "startdate"  : "",
        "enddate"  : ""
      };


    //DONE -get values from selectors
    $("#start_date").change(function() {
        dateArray["startdate"] = $("#start_date").val();
    });

    $("#end_date").change(function() {
        dateArray["enddate"] = $("#end_date").val();
    });

    
    $("#load_results").click(function(){
        
        //DONE -.post the array to load_bloodpressure_data.php
        //
        $.post("includes/load_bloodpressure_data.php", {
            datesPosted: dateArray
          }, function(data, status){
                const parsedData = JSON.parse(data);
                document.getElementById("table_div").classList.remove("hidden");
                //for each loop that writes out readable format
                for (var i=0 ; i < parsedData.length ; i++){
                    $("#results_table").append("<tr>" + "<td>" + 
                        parsedData[i].sys + "</td> <td>" + 
                        parsedData[i].dia + "</td> <td>" + 
                        parsedData[i].bpm + "</td> <td>" + 
                        parsedData[i].dateonly
                        + "</td></tr>"); 
                };
                
              });
    
    });

});