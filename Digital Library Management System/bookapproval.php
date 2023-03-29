<?php 
include "connection.php";


	$Id= $_GET['id'];
	

	$updatequery="update booksrequest set Status='Approved' where BookId='$Id'";
	$update= mysqli_query($con, $updatequery);
	if($update)
	{
	echo "<script>window.location='ViewBooksRequest.php';alert('Request Approved Successfully');</script>";

	}




?>

