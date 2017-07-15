<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";


$conn = new mysqli($servername, $username, $password, $dbname);

@$a=$_POST['option1'];
@$b=$_POST['option2'];
@$c=$_POST['option3'];
@$d=$_POST['option4'];
@$e=$_POST['option5'];

if(@$_POST['submit'])
{
 $s="insert into radio(IO,DP,TL,MC,UL) values('$a','$b','$c','$d','$e')";

$conn->query($s);
}
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
					<li class="selected">
						<a href="loginpage.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

      <div class="jumbotron text-center">
  <h1>DREAM LIFE SKILLS ASSESSMENT SCALE</h1>
  </div>

	 <div class="container">
         <form action="assesment.php" method="post">
  <table class="table">
    <thead>
      <tr>
        <th>    </th>
        <th>Does not yet do</th>
        <th>Does with lots of help</th>
		<th>Does with some help</th>
		<th>Does with little help</th>
		<th>Does independently</th>
      </tr>
    </thead>
    <body>
      <tr>
        <td>IO Interacting with others</td>
          
        <td><div class="radio">
  <label><input type="radio" value="1" name="option1">1</label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" value="2" name="option1">2</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="3" name="option1">3</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="4" name="option1">4</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="5" name="option1">5</label>
</div></td>
      </tr>
      <tr>
        <td>DP Overcoming difficulties and solving problems</td>
        <td><div class="radio">
  <label><input type="radio" value="1" name="option2">1</label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" value="2" name="option2">2</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="3" name="option2">3</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="4" name="option2">4</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="5" name="option2">5</label>
</div></td>
      </tr>
      <tr>
        <td>TL Taking initiative</td>
        <td><div class="radio">
  <label><input type="radio" value="1" name="option3">1</label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" value="2" name="option3">2</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="3" name="option3">3</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="4" name="option3">4</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="5" name="option3">5</label>
</div></td>
      </tr>
	  <tr>
        <td>MC Managing conflict</td>
        <td><div class="radio">
  <label><input type="radio" value="1" name="option4">1</label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" value="2" name="option4">2</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="3" name="option4">3</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="4" name="option4">4</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="5" name="option4">5</label>
</div></td>
      </tr>
	  <tr>
        <td>UL understanding and following instructions</td>
        <td><div class="radio">
  <label><input type="radio" value="1" name="option5">1</label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" value="2" name="option5">2</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="3" name="option5">3</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="4" name="option5">4</label>
</div></td>
<td><div class="radio">
  <label><input type="radio" value="5" name="option5">5</label>
</div></td>
      </tr>
	  <tr>
	
	  </tr>
    </tbody>
  </table>
</div>
<div class="container">
<div class="col-xs-6">
     <center>   <h2>Comments</>
          <textarea class="form-control" id="comment" col-xs-10></textarea><br><br></center>
	  
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</div>
</div>  
	  
    </body>
	</div>
</body>
</html>