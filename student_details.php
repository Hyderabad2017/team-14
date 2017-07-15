<?php session_start();
require_once 'dbcon.php';
$teache= 1;
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
<form action="mark_visibility.php" method="post">
<?php
   
$teache= $_SESSION['sai'];

$query="select stid,name,gender,stid from details where tid=$teache";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO STUDENTS HAVE REGISTERED</b></font><br></div>");
else
	{
	$keys=array_keys($row);

			print "Name</t>Gender</t>StudentID";
		
			
	$_SESSION['rows']=$number_of_rows;
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j]);
			if($j==0)continue; 
	

		
				print "<td><a href=logout.php?id>$value</td>";
			}
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div></form><br/><br/>";
	}
?>
<div align="center">
<table>
     
<tr><td >
    <form action="profile.php" method="post">
       
   <center> id: <input type="text" name="fname"><br><br><br></center> 
         <input class="button button-submit" type="submit" value="View Profile"><br>
    </form>
   
<form action="assesment.php" method="post">
<input class="button button-submit" type="submit" value="View Assesment">
</form>

<form action="frame.html" method="post">
<input class="button button-submit" type="submit" value="View Progress">
</form><td></table>
</div>
</div>
</body>
</html>
