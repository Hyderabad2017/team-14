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
  
       