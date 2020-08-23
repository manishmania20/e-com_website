<?php
$conn=mysqli_connect("localhost","root","","userlog");

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];

	$sql=mysqli_query($conn,"delete from subscribers where id='$id'");
	if($sql)
	{
		echo"deleted successfully";
		header("Location: subscribers.php");
	}
}



?>