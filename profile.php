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
					<li class="selected">
						<a href="loginpage.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="resumepage">
    <div align="center">
    <h2 class="f">STUDENT PROFILE</h2><hr><br/>
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

$stid=$_POST['fname'];
    $_SESSION['student']=$stid;
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM details where stid=$stid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Student id: " . $row["stid"]. "<br>Name: " . $row["name"]. "<br> Gender: " . $row["gender"]. "<br> Age: " .$row["age"].  "<br> siblings: " .$row["sibling"]. "<br> Family Income: " .$row["familyincome"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	
<form action="student_details.php" method="post">
<input class="button button-submit" type="submit" value="Go Back">
</form><td></tr></table>



