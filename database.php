<?php error_reporting(0);
mysqli_select_db('csv',mysqli_connect('localhost','root',''));

?>
<form action="" method="post"  enctype="multipart/form-data">
<div>
	<label>CSV File:</label>
	<input type="file" multiple name="filename" id="filename"><br /><br />
	<button type="submit" id="submit" name="submit" data-loading-text="Loading...">Upload</button>
</div>
</form>
<style type="text/css">
	
form{
	border: 2px red dotted;
	width:400px;
	height:120px;
	background:skyblue;
	border-radius: 4px;
	padding:5px;
}
h1 {
	color: white;
    font-weight: bold;
	border: 2px red dotted;
	font-family:Algerian;
	width:400px;
	height:50px;
	background:black;
	border-radius:4px;
	padding:5px;
}
label {
	color: red;
    font-size: 20px;
    font-weight: bold;
    margin-right: 10px;
}
input[type="file"] {
	border: 2px red dotted;
    padding: 8px;
    color: red;
    font-size: 15px;
    border-radius: 4px;
    margin-right: 10px;
	cursor:pointer;
}
button {
    font-size: 18px;
    border:  2px red solid;
    font-weight: bold;
    padding: 8px;
    background: black;
    color: white;
    border-radius: 4px;
	cursor:pointer;
}	
	
	</style>

<?php
if (isset($_POST['submit'])) 
{
include('database.php');
 
//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");
 
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	mysqli_query("INSERT into data (user_name, first_name, last_name, date_added)
	values('$data[0]', '$data[1]', '$data[2]', NOW())");
	
	}
 
fclose($handle);
 
echo "<script type='text/javascript'>alert('Successfully Imported a CSV File!');</script>";
echo "<script>document.location='index.php'</script>";
}
 
?>
<?php
include ('database.php');
$result= mysqli_query("select * from data order by user_id ASC") or die (mysqli_error());
while ($row= mysqli_fetch_array ($result) ){
$id=$row['user_id'];
?>
 
	<tbody style="background:skyblue; color:black">
		<tr>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo date("M d, Y h:i:s a",strtotime($row['date_added'])); ?></td>
		</tr>
	</tbody>
 
<?php } ?>