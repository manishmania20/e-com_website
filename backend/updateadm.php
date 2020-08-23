<?php 
$conn= mysqli_connect("localhost","root","","userlog");

$id=$_GET['update'];
$sql=mysqli_query($conn, "select * from subscribers where id='$id'");
$row=mysqli_fetch_array($sql); 


?>

<?php
$conn= mysqli_connect("localhost","root","","userlog");

$id=$_GET['update'];
if(isset($_POST['update']))
{
	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];

	$sql=mysqli_query($conn, "update subscribers set email='$email' where id='$id'");
	if($sql)
	{
		echo "updated successfully";
		header("Location: subscribers.php");
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Backend practice</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<h1>Updation form</h1>
		<table>
			<tr>
				<td>
					<label for="email">Email :</label><br>
					<input type="email" name="email" value="<?php echo $row['email'];?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mobile">Date:</label><br>
					<input type="date" name="date" value="<?php echo $row['date'];?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mobile">Time:</label><br>
					<input type="time" name="time" value="<?php echo $row['time'];?>">
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" name="update" value="submit" style="margin-top: 10px;">
				</tr>
			</td>
		</table>
	</form>