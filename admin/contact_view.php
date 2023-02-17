 <?php

require_once("connection2.php");
$query = "select * from contact    ";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>View contact</title>
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
            <td>FName</td>
           
            <td>Email</td>
          
           
         
            <td>Meesage</td>
            <td>Delete</td>
         </tr>

         <?php
            
        
            while($row=mysqli_fetch_assoc($result))
            {
    $ID = $row['id'];
    $FName = $row['name'];
    $Email = $row['email'];
    
    $Massage = $row['message'];
            
            
          ?>
          <tr>
            <td><?php echo $ID ?></td>
            <td><?php echo $FName ?></td>
            <td><?php echo $Email ?></td>
           
            <td><?php echo $Massage ?></td>
            <td><a href="delete con.php?Del=<?php echo $ID ?>">Delete</a></td>
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