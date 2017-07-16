<?php
 $con= mysqli_connect('localhost', 'root', '', 'cfg14')
                or die(mysqli_error($con));
 @$a=$_POST['option1'];
 @$b=$_POST['option2'];
 @$d=$_POST['option4'];
 @$e=$_POST['option5'];
 if(@$_POST['save and continue']){
  $sql="insert into radio(IO,DP,TL,MC,UL) values('$a','$b','$c','$d','$e')";
$con->query($sql);
 }
  ?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>

<title>Student Assessment</title>
<link rel="stylesheet" type="text/css" href="style2.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

      <div class="jumbotron text-center">
  <h1>DREAM LIFE SKILLS ASSESSMENT SCALE</h1>
  </div>

   <form method="POST" action="assess.php">  		 
	 <div class="container">
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
    <tbody>
      <tr>
        <td>IO Interacting with others</td>
        <td><div class="radio">
  <label><input type="radio" name="option1" value="1"></label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" name="option1" value="2"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option1" value="3"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option1" value="4"></label>
</div></td>
<td><div class="radio"
  <label><input type="radio" name="option1" value="5"></label>
</div></td>
      </tr>
      <tr>
        <td>DP Overcoming difficulties and solving problems</td>
        <td><div class="radio">
  <label><input type="radio" name="option2"></label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" name="option2"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option2"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option2"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option2"></label>
</div></td>
      </tr>
      <tr>
        <td>TL Taking initiative</td>
        <td><div class="radio">
  <label><input type="radio" name="option3"></label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" name="option3"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option3"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option3"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option3"></label>
</div></td>
      </tr>
	  <tr>
        <td>MC Managing conflict</td>
        <td><div class="radio">
  <label><input type="radio" name="option4"></label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" name="option4"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option4"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option4"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option4"></label>
</div></td>
      </tr>
	  <tr>
        <td>UL understanding and following instructions</td>
        <td><div class="radio">
  <label><input type="radio" name="option5"></label>
</div></td>
        <td><div class="radio">
  <label><input type="radio" name="option5"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option5"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option5"></label>
</div></td>
<td><div class="radio">
  <label><input type="radio" name="option5"></label>
</div></td>
      </tr>
	  <tr>
	  <td>Comments</td>
	  <td><textarea class="form-control" id="comment" col-xs-10></textarea></td>
	  
	  </tr>
    </tbody>
  </table>
</div>
<div class="container">
<div class="col-xs-6">
 <button type="button" class="btn btn-info">save and continue</button>
</div>
</div> 
</form>

	   </body>
	   </html>