<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";


$conn = new mysqli($servername, $username, $password, $dbname);

$a=$_POST['option1'];
$b=$_POST['option2'];
$c=$_POST['option3'];
$d=$_POST['option4'];
$e=$_POST['option5'];
$tid=$_POST['sai'];
$sid=$_POST['student'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ip (id,ip,country,brower,vdate,last,tid) VALUES ('$sid','$a', '$b', '$c','$d','$e','$tid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:student_details.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?> 

