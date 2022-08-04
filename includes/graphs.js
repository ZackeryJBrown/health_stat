$(document).ready(function(){

    //plan to make data table:
    //DONE - make a date (calendar) range selector in html
    //get values from selectors
    //put array into php readable format
    //.post the array to load_bloodpressure_data.php
    //create sql in that php file to handle the date range query
    //returning the results, unhide the html for a table and insert into rows the data from returned array


    $("button").click(function(){
        var startDate = $("#start_date");
        var endDate = $("#end_date");
        console.log(startDate);
        console.log(endDate);
        $("#graphdiv").load("load_bloodpressure_data.php");
    });

    var width = 850;
    var height = 400;

    var svg = d3.select("#chartSVG")
                .append("g").attr("class", "chartArea");

  //defines x-scale
    var xScale = d3.scaleBand()
                .range([0,width])
                .padding(0.1)
                .domain(months);




  //defines y-scale
    var yScale = d3.scaleLinear()
                .range([height,0])
                .domain([0,215000]);

    //creates bars, adjust for incoming data array and key value names
    svg.selectAll(".bar")
        .data(stepData).enter()
        .append("rect")
        .attr( "class", "bar" )
                                                                //change .month
        .attr( "x", function(datapoint){ return xScale(datapoint.month); } )
        .attr( "width", xScale.bandwidth() )
                                                                //change .steps
        .attr( "y", function(datapoint){ return yScale(datapoint.steps); } )
        .attr( "height", function(datapoint){ return height - yScale(datapoint.steps); });



    svg.append("g")
        .attr("class", "xScale")
        .call(d3.axisBottom(xScale));


    svg.append("g")
        .attr("class", "yScale")
        .call(d3.axisLeft(yScale));


});