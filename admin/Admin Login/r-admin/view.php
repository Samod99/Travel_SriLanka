 <?php

require_once("connection2.php");
$query = "select * from room    ";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="admin.css"/>
    <title>View Record</title>
</head>
<body class="bg-dark">
<a href="#" class="btn" onclick="history.back();">Back</a>



 <div class="container">
 <div class="row">
 <div class="col m-auto">
 <div class="card mt-5">

     <table class="table table-bordered">
         <tr>
            <td>User ID</td>
            <td> Name</td>
            
            <td>Email</td>
            
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
    $FName = $row['name'];
   
    $Email = $row['email'];
 
    $Tno = $row['tno'];
    $Date = $row['date'];
    $Room = $row['type'];
    $City = $row['city'];
    $Country = $row['country'];
            
            
          ?>
          <tr>
            <td><?php echo $ID ?></td>
            <td><?php echo $FName ?></td>
           
            <td><?php echo $Email ?></td>
           
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