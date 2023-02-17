 <?php

require_once("connection2.php");
$query = "select * from rent    ";
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

<a href="#" class="btn" onclick="history.back();">Back</a>

 <div class="container">
 <div class="row">
 <div class="col m-auto">
 <div class="card mt-5">

     <table class="table table-bordered">
         <tr>
            <td>User ID</td>
            <td>Pick Location</td>
            <td>Drop Location</td>
            <td>Pick Date and time</td>
            <td>Drop Date and time</td>
            <td>Name</td>
            <td>Email</td>
            <td>Telephone No</td>
            <td>Delete</td>
         </tr>

         <?php
            
        
            while($row=mysqli_fetch_assoc($result))
            {
    $ID = $row['id'];
    $Plocation =$row['plocation'];
    $Rlocation = $row['rlocation'];
    $Pdate = $row['pdate'];
    $Rdate = $row['rdate'];
    $FName = $row['uname'];
    $Email = $row['email'];
    $Tno = $row['tno'];
   
            
            
          ?>
          <tr>
            <td><?php echo $ID ?></td>
            <td><?php echo $Plocation ?></td>
            <td><?php echo $Rlocation ?></td>
            <td><?php echo $Pdate ?></td>
            <td><?php echo $Rdate ?></td>
            <td><?php echo $FName ?></td>
            <td><?php echo $Email ?></td>
            <td><?php echo $Tno ?></td>
            <td><a href="rdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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