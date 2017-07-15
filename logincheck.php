<html>
<?php 
$con=mysqli_connect('localhost','root','','cfg14');
$sname=$_POST['username'];
 $pass=$_POST['password'];
 $sql="select username,password from mylogin"; 
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
    
header('location:student_details.php');}
    	
else
 {
 $error = "Your Login Name or Password is invalid";
    print "$error";

}
    
?>
</html>