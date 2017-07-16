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
     ['Date', 'IO', 'DP', 'TL', 'MC','UL'],
 
     
     <?php 
 $query = "SELECT count(ip) AS count, vdate, brower, country, tid,last FROM ip where id=2 GROUP BY vdate ORDER BY vdate";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){
//  echo "['" . $row['vdate'] . "'," . $row['count'] . ", " . $row['brower'] . ", " . $row['country'] . ", " . $row['tid'] . "],";
      echo "['" . $row['vdate'] . "'," . $row['count'] . ", " . $row['brower'] . ", " . $row['country'] . ", " . $row['tid'] . "," . $row['last'] . "],";
 }
 ?>
 ]);

 var options = {
 title: 'Date wise visits'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h3>Column Chart</h3>
 <div id="columnchart" style="width: 900px; height: 500px;"></div>
</body>
</html>