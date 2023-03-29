

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Faculty Registration Request</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>
<body  style="background-color:#6CBCE7">
    <?php include"header/librarianheader.php";?>
    <br> 
    <center>
<br><br>
    <h4>Faculty Registration Request</h2>
        <br>   
        <form method="post">
<table border="1"   cellpadding="15" cellspacing="20" style="text-align:center; width:1000px">
        <tr >
            <th>Faculty Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>Status</th> 
            <th>Approval</th>
        </tr>

        <?php

include "connection.php";

$query="select * from facultyregistration";
$x= mysqli_query($con, $query);
while($row= mysqli_fetch_array($x))
{

        ?>

        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Password']; ?></td>
            <td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Experience']; ?></td>
            <td><?php echo $row['Status']; ?></td> 
             

       
    <td><a class="btn btn-success" role="button" href="facultyapproval.php?id=<?php echo $row['Id']; ?>">Approved</a>

<a class="btn btn-success" role="button" href="facultydecline.php?id=<?php echo $row['Id']; ?>">Decline</a>
    </td>

</tr>

  
</form>



    
<?php
}

?>
    </center>

</table>































    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--JS-->
</body>
</html>