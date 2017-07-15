<html>
<div class="chart"></div>
.chart div {
  font: 10px sans-serif;
  background-color: steelblue;
  text-align: right;
  padding: 3px;
  margin: 1px;
  color: white;
}

//d3 lines
<script type="text/javascript">
function myD3(inputData){
d3.select(".chart")
  .selectAll("div")
  .data(inputData).enter()
    .append("div")
    .style("width", function(d) { return d + "px"; })
    .text(function(d) { return d; });
}
</html>