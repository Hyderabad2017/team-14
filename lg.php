<<<<<<< HEAD
<html>
<?php 
$con=mysqli_connect('localhost','root','','cfg14');
$sname=$_POST['username'];
 $pass=$_POST['password'];
 $sql="select username,password from credentials"; 
$r=mysqli_query($con,$sql); 

    
    while($row = $r->fetch_assoc())
{
if($sname==$row['username'] && $pass==$row['password']) 
{ $flag=1; } 
else
{
$flag=0;
}
}
if($flag==1)
{
echo "success";
header('location:style1.css');
	
}
else
 {
	
	header('location:u1.php');
	
	
 }
 
 

?>
=======
<html>
<?php 
$con=mysqli_connect('localhost','root','','cfg14');
$sname=$_POST['username'];
 $pass=$_POST['password'];
 $sql="select username,password from credentials"; 
$r=mysqli_query($con,$sql); 

    
    while($row = $r->fetch_assoc())
{
if($sname==$row['username'] && $pass==$row['password']) 
{ $flag=1; } 
else
{
$flag=0;
}
}
if($flag==1)
{
echo "success";}
else
 {
echo "unsuccess";}
?>
>>>>>>> e532348e2e29d2a3e9e66c8dddc9d5b4d2205b23
</html>