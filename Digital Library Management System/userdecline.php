<?php 
include "connection.php";


	$Id= $_GET['id'];
	

	$updatequery="Update userregistration set Status='Decline' where Id='$Id'";
	$update= mysqli_query($con, $updatequery);
	if($update)
	{
		echo "<script>window.location='LibrarianHomePage.php';alert('Request Declined Successfully');</script>";
	}




?>

