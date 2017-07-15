<?php
 $con = mysqli_connect('localhost','root','','cfg14');
?>

<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Create Google Charts
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Date', 'Past Date'],
 <?php 
 $query = "SELECT count(ip) AS count, vdate FROM ip group BY id";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['vdate']."',".$row['count']."],";
 }
 ?>
 
 ]);

 var options = {
 title: 'Date wise visits',   legend: { position: 'top', maxLines: 3 },     bar: { groupWidth: '75%' }, vAxis: {
            minValue: 0,
            ticks: [1,2, 3, 4, 5]
          }
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h3>Pre Training</h3>
 <div id="columnchart" style="width: 700px; height: 400px;"></div>


    
</body>
    
</html>