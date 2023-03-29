<?php 
include "connection.php";


	$Id= $_GET['id'];
	

	$updatequery="update userregistration set Status='Approved' where Id='$Id'";
	$update= mysqli_query($con, $updatequery);
	if($update)
	{
	echo "<script>window.location='LibrarianHomePage.php';alert('Request Approved Successfully');</script>";

	}




?>

