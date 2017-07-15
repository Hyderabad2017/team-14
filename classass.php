<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfg14";


$conn = new mysqli($servername, $username, $password, $dbname);

@$a=$_POST['q1'];
@$b=$_POST['q2'];
@$c=$_POST['q3'];
@$d=$_POST['q4'];
@$e=$_POST['q5'];
@$f=$_POST['q6'];
@$g=$_POST['q7'];
@$h=$_POST['q8'];
@$i=$_POST['q9'];
@$j=$_POST['q10'];
@$k=$_POST['q11'];
@$l=$_POST['q12'];
@$m=$_POST['q13'];
@$n=$_POST['q14'];
@$o=$_POST['q15'];
@$p=$_POST['q16'];
@$q=$_POST['q17'];
@$r=$_POST['q18'];
@$s=$_POST['q19'];
@$t=$_POST['q20'];
@$u=$_POST['q21'];
@$v=$_POST['q22'];
@$w=$_POST['q23'];
@$x=$_POST['q24'];
@$y=$_POST['q25'];

if(@$_POST['submit'])
{ 
 $s="insert into asses(`1`,`2`,`3`,`4`,`5`,`6`,`7`,`8`,`9`,`10`,`11`,`12`,`13`,`14`,`15`,`16`,`17`,`18`,`19`,`20`,`21`,`22`,`23`,`24`,`25`) values($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y);";
echo $s;
$conn->query($s);
}
?> 
<html manifest="offline.manifest">
<head>
<title>Student inventory</title>
<link rel="stylesheet" type="text/css" href="style2.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>My class inventory</h1>
  
  </div>
   <div class="container">
  
  <table class="table">
<table>
 <form action="classass.php" method="post">
<thead>
      <tr>
        <th>    </th>
        <th>YES</th>
        <th>NO</th>
		
      </tr>
    </thead>
	<tbody>

<tr>
<td>1.Students enjoy their schoolwork in my class. </td>
<td> <input type="radio"  name="q1" value="3"> </td>
  <td><input type="radio"  name="q1" value="1" ><br></td>
</tr>
<tr>
<br>
<td>2.Students are always fighting with each other.
 </td>
<td> <input type="radio" name="q2" value="3"> </td>
  <td><input type="radio" name="q2" value=1" ><br></td>
</tr>
<tr>

  <td>3.Students often race to see who can finishfirst.</td>
<td>
<input type="radio" name="q3" value="3"> </td>
 <td> <input type="radio" name="q3" value="1"> <br></td>
</tr>
<tr>
<td>4. In our class the work is hard to do.</td>
<td><input type="radio" name="q4" value="3"> </td>
 <td> <input type="radio" name="q4" value="1"> <br></td>
</tr>
<tr>
<td>5. In my class everyone is my friend.
 </td>
<td><input type="radio" name="q5" value="3"> </td>
<td><input type="radio" name="q5" value="1"> <br></td>
</tr>
  <tr>
<td>6. Some students are not happy in class.</td>
<td><input type="radio" name="q6" value="3"> </td>
<td>  <input type="radio" name="q6" value="1"> <br></td>
</tr>
<tr>
<td> 7. Some of the students in our class are mean.
</td>
<td><input type="radio" name="q7" value="3"> </td>
<td> <input type="radio" name="q7" value="1"> <br></td>
</tr>
<tr>
<td> 
8. Most students want their work to be better than their friends' work.</td>
<td><input type="radio" name="q8" value="3"> </td>
 <td><input type="radio" name="q8" value="1"> <br></td>
</tr>
<tr>
<td>9. Most students can do their schoolwork without help.</td>

<td><input type="radio" name="q9" value="3"> </td>
 <td><input type="radio" name="q9" value="1"> <br></td>
</tr>
<tr>
<td>10. Some people in my class are not my friends.

</td>
<td><input type="radio" name="q10" value="3"> </td>
 <td><input type="radio" name="q10" value="1"> <br></td>
</tr>
<tr>
<td>11. Students seem to like the class.</td>
<td><input type="radio" name="q11" value="3"> </td>
<td> <input type="radio" name="q11" value="1"><br></td>
</tr>
<tr>
<td>12. Many students in our class like to fight.
</td>
<td><input type="radio" name="q12" value="3"> </td>
 <td><input type="radio" name="q12" value="1"><br></td>
</tr>
<tr>
<td>
13. Some students feel bad when they don't do as well as the others.</td>
<td>
<input type="radio" name="q13" value="3"> </td>
<td> <input type="radio" name="q13" value="1"> <br></td>
</tr>
<tr>
<td>14. Only the smarter students can do their work.</td>
<td>
<input type="radio" name="q14" value="3"> </td>
<td> <input type="radio" name="q14" value="1"> <br></td>
</tr>
<tr>
<td>15. All students in my class are close friends.</td>
<td>

<input type="radio" name="q15" value="3"> </td>
 <td><input type="radio" name="q15" value="1"> <br></td>
</tr>
<tr>
<td>16. Some of the students do not like the class.

</td>
<td><input type="radio" name="q16" value="3"> </td>
 <td><input type="radio" name="q16" value="1"> <br></td>
</tr>
<tr>
<td>17. Certain students always want to have their way.</td>
<td><input type="radio" name="q17" value="3"> </td>
 <td><input type="radio" name="q17" value="1"> <br></td>
</tr>
<tr>
<td>18. Some students always try to do their work better than the others.
</td>
<td><input type="radio" name="q18" value="3"> </td>
 <td><input type="radio" name="q18" value="1"> <br></td>
</tr>
<tr>
<td>19. Schoolwork is hard to do.</td>
<td><input type="radio" name="q19" value="3"> </td>
 <td><input type="radio" name="q19" value="1"> <br></td>
</tr>
<tr>
<td>
20. All of the students in my class like each other.</td>
<td><input type="radio" name="q20" value="3"> </td>
<td> <input type="radio" name="q20" value="1"> <br></td>
</tr>
<tr>
<td>21. This class is fun.</td>


<td><input type="radio" name="q21" value="3"> </td>
<td> <input type="radio" name="q21" value="1"> <br></td>
</tr>
<tr>
<td>
22. Students in our class fight a lot.</td>
<td><input type="radio" name="q22" value="3"> </td>
<td> <input type="radio" name="q22" value="1"> <br></td>
</tr>
<tr>
<td>23. A few students in my class want to be first all the time
.</td>
<td><input type="radio" name="q23" value="3"> </td>
 <td><input type="radio" name="q23" value="1"> <br></td>
</tr>
<tr>
<td>24. Most of the students in my class know how to do their work.</td>
<td><input type="radio" name="q24" value="3"> </td>
 <td><input type="radio" name="q24" value="1"> <br></td>
</tr>
<tr>
<td>25. Students in our class like each other as friends.</td>
<td><input type="radio" name="q25" value="3"> </td>
 <td><input type="radio" name="q25" value="1"> <br></td>
</tr>
</tbody>

<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>

</table>
</form>

</body>
</html>
