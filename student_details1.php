<?php session_start();
require_once 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Learning Curve</title>
	<link rel="stylesheet" href="css/loginpage.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="#">Learning Curve</a>
			</div>
			<div id="navigation">
                <ul>
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>			
		</div>
	</div>
	<div class="resumepage">
    <div align="center">
    <h2 class="f">LIST OF STUDENTS</h2><hr><br/>
    </div>
<div align="center">
<table id="rounded-corner" summary="Companies Details" >
    <thead>
<form action="student_details.php" method="post">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stid, name, gender FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>id: " . $row["stid"]. " <br> Name: " . $row["name"]. "<br> GENDER: ".$row["gender"]." <br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
<div align="center">
<table>
<tr><td ><form action="student_details.php" method="post">
<input class="button button-submit" type="submit" value="Go BACK">
</form></td><td>
<td></tr></table>
</div>
</div>
</body>
</html>
