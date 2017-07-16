<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";


$con = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from asses  ";
$r=mysqli_query($con,$sql);
if($r->num_rows>0)
{
	while($row=$r->fetch_assoc()){
		$s=$row["one"]+$row["six"]+$row["eleven"]+$row["sixteen"]+$row["twentyone"];
		$f=$row["two"]+$row["seven"]+$row["twelve"]+$row["seventeen"]+$row["twentytwo"];
		$cm=$row["three"]+$row["eight"]+$row["thirteen"]+$row["eighteen"]+$row["twentythree"];
		$d=$row["four"]+$row["nine"]+$row["fourteen"]+$row["nineteen"]+$row["twentyfour"];
		$ch=$row["five"]+$row["ten"]+$row["fifteen"]+$row["twenty"]+$row["twentyfive"];
		echo "S" ."$s";
		
		echo "F" ."$f";
		
		echo "CM" ."$cm";
		echo "D" ."$d";
		echo "CH" ."$ch";
		$t=($s+$f+$cm+$d+$ch)/5;
echo "average="."$t";
	}
}

?>


		