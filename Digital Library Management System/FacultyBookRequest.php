<?php

include "connection.php";
session_start();
if(isset($_POST['submit']))
{

 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $title= $_POST['title'];
 $date = $_POST['date'];
 $days= $_POST['days'];
 $status = "Pending";

$query="Insert into booksrequest(Name, Email, BookTitle, Date, Days, Status) values('$name', '$email','$title','$date', '$days','$status' )";
 if (mysqli_query($con, $query)) {
      echo "<script>alert('Books Request is Pending');</script>";
     }
    else {

      echo "<script>window.location='FacultyBookRequest.php';alert('Invalid Data');</script>";
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Books Request</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


    <body  style="background-color:#6CBCE7">
     
 <?php  include "header/facultyheader.php";
  
 $name=$_SESSION['facultyname']; 
 $email=$_SESSION['facultyemail']; 
 $Id=$_GET['id'];
$query="select * from books where Id='$Id'";
$x= mysqli_query($con, $query);
while($row=mysqli_fetch_array($x))
{
?>


   <br>
        <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Books Request </h2>
   <br>
                            

<form  method="post">
                   
                  
            
<center>


      <label style="margin-right: 286px">Faculty Name</label>    
      <div class="form-group mb-4 ">
 
            <input  type="text" name="name" value="<?php echo $name; ?>"  class="form-control w-50" readonly>                  
    </div>




    <label style="margin-right: 286px">Faculty Email</label>    
     <div class="form-group mb-4 ">

            <input  type="text" name="email" value="<?php echo $email; ?>"  class="form-control w-50" readonly>
                       
    </div>


    <label style="margin-right: 310px">Book Title</label>  
    <div class="form-group mb-4 ">
  

            <input  type="text" name="title" value="<?php echo $row['BookTitle']; ?>"  class="form-control w-50" readonly>
                       
    </div>



   <label style="margin-right: 310px">Issue Date</label>  
    <div class="form-group mb-4 ">
                        
            <input  type="date" name="date" class="form-control w-50">
                       
    </div>


     <label style="margin-right: 350px">Days</label>    
    <div class="form-group mb-4 ">
                        
            <input  type="text" name="days" placeholder="Days" class="form-control w-50">
                       
    </div>


   
<?php 

}

?>

    <div class="form-group mb-4 ">
                        
        <input type="submit" name="submit" class="btn btn-primary" value="Send Request" style="width:50%">
                        
    </div>
                   

                   
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>