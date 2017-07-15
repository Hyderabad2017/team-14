<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";


$conn = new mysqli($servername, $username, $password, $dbname);

@$a=$_POST['option'];
@$b=$_POST['sex'];
if(@$_POST['submit'])
{
 $s="insert into mylogin(username,password) values('$a','$b')";

$conn->query($s);
}
?> 
<html>
<body bgcolor="pink">
<center>
<form method="post">
<table border="1" bgcolor="#00CCFF">
<tr><td>Name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr><td rowspan="2">Sex</td>
<td><input type="radio" name="sex" value="Male"/>Male</td>
<tr>
<td><input type="radio" name="sex" value="Female"/>Female</td></tr>
</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>
</center>
</body>
</html>

