<?php 
require_once 'database.php';

if(isset($_GET['del'])) {
	$del=$_GET['del'];
	$sql="DELETE FROM userlist where id='".$del."'";
	$result=mysqli_query($conn,$sql);
	header("location:index.php");
}
?>