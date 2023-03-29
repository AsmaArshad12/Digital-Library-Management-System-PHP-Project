<?php 
include "connection.php";


	$Id= $_GET['id'];
	

	$updatequery="Update booksrequest set Status='Decline' where BookId='$Id'";
	$update= mysqli_query($con, $updatequery);
	if($update)
	{
		echo "<script>window.location='ViewBooksRequest.php';alert('Request Declined Successfully');</script>";
	}




?>

