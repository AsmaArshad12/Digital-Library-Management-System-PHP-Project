<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from books where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewBooks.php';alert('Books Details Deleted Successfully');</script>";
}

?>