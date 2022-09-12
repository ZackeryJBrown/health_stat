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
    
    
    $("#load_results").click(function(){
        $("#table_div").empty();
        dateArray["startdate"] = "";
        dateArray["enddate"] = "";
        var parsedData = [];
        dateArray["startdate"] = $("#start_date").val();
        dateArray["enddate"] = $("#end_date").val();

        if (dateArray["startdate"] > dateArray["enddate"]){
            alert("Error: Selected a starting and ending date that are not valid");
        };
        //DONE -.post the array to load_bloodpressure_data.php
        //
        $.post("includes/load_bloodpressure_data.php", {
            datesPosted: dateArray
          }, function(data, status){
                parsedData = JSON.parse(data);
                $("#table_div").removeClass("hidden");
                $("#table_div").append("<tr>" +
                    "<th>Systolic</th>" +
                    "<th>Diastolic</th>" +
                    "<th>Heartrate (BPM)</th>" +
                    "<th>Date</th>" +
                  "</tr>");
                //for each loop that writes out readable format
                for (var i=0 ; i < parsedData.length ; i++){
                    $("#table_div").append("<tr>" + "<td>" + 
                        parsedData[i].sys + "</td> <td>" + 
                        parsedData[i].dia + "</td> <td>" + 
                        parsedData[i].bpm + "</td> <td>" + 
                        parsedData[i].dateonly
                        + "</td></tr>"); 

                };
                
              });
    
    });


//start barchart display - add a click button or add to previous button
$("#graphbutton").click(function(){
    var dateRange = [];
    for (var i= 0 ; i < parsedData.length ; i++){
        dateRange[i] = parsedData[i].dateonly;
    };

    var width = 850;
    var height = 100;

    console.log(parsedData.length);
    //check this to insert into the HTML, needs changes
    var svg = d3.select("#chartSVG").append("svg")
                    .attr("class", "chartArea")
                    .attr("width", width)
                    .attr("height", (height * parsedData.length));


    var xScale = d3.scaleBand()
        .range([0,width])
        .padding(0.1)
        .domain(dateRange);


    //create variable the iterates through the JSON to get highest value for any of the 3 numberic value
    var maxValue = 0;

    
    for (var i = 0; i < parsedData.length; i++) {
        var parsedDataRow = parsedData[i];
        console.log(typeof(parsedDataRow));
        console.log(parsedDataRow);
        for (var j = 0; j < parsedDataRow.length; j++) {
            
            if (parsedDataRow[j] > maxValue);{
            maxValue = parsedDataRow[j];
            
            };
        };
    };
    
    console.log("max value is:");
    console.log(maxValue);
    
    var yScale = d3.scaleLinear()
        .range([height,0])
        //set 200 to scaling variable for better functionality
        .domain([0,200]);

    



    

    svg.selectAll("g")
    .data(parsedData)
    .enter().append("rect")
    .append()
    	.attr( "class", "bar" )
    	.attr( "x", function(parsedData){ return xScale(parsedData.dateonly); } )
    	.attr( "width", xScale.bandwidth() )
    	.attr( "y", function(parsedData){ return yScale(parsedData.bpm); } )
    	.attr( "height", function(parsedData){ return height - yScale(parsedData.bpm); });
    

  // Provided
  svg.append("g")
      .attr("class", "xScale")
      .call(d3.axisBottom(xScale));

  // Provided
  svg.append("g")
      .attr("class", "yScale")
      .call(d3.axisLeft(yScale));
});

});