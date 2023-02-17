 <?php

require_once("connection.php");
$query = "select * from records    ";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>View Record</title>
</head>
<body class="bg-dark">

 <div class="container">
 <div class="row">
 <div class="col m-auto">
 <div class="card mt-5">

     <table class="table table-bordered">
         <tr>
            <td>User ID</td>
            <td>Fisrt Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Nic No./Passport No</td>
            <td>Telephone No</td>
            <td>Date</td>
            <td>Room</td>
            <td>City</td>
            <td>Country</td>
            <td>Delete</td>
         </tr>

         <?php
            
        
            while($row=mysqli_fetch_assoc($result))
            {
    $ID = $row['id'];
    $FName = $row['fname'];
    $LName = $row['lname'];
    $Email = $row['email'];
    $Nic = $row['nic'];
    $Tno = $row['tno'];
    $Date = $row['date'];
    $Room = $row['room'];
    $City = $row['city'];
    $Country = $row['country'];
            
            
          ?>
          <tr>
            <td><?php echo $ID ?></td>
            <td><?php echo $FName ?></td>
            <td><?php echo $LName ?></td>
            <td><?php echo $Email ?></td>
            <td><?php echo $Nic ?></td>
            <td><?php echo $Tno ?></td>
            <td><?php echo $Date ?></td>
            <td><?php echo $Room ?></td>
            <td><?php echo $City ?></td>
            <td><?php echo $Country ?></td>
            <td><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></td>
          </tr>

       
          <?php
            }
          ?>
 
         
     </table>
 


 </div>

 </div>

 </div>
 </div>
   
    
</body>
</html>