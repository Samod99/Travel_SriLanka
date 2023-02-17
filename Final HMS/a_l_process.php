<?php
   
    require_once('connection.php');

   if(isset($_POST['submit']))
   {
      $Fname  = $_POST['fname'];
      $Pass = $_POST['password'];

      if(empty( $Fname) || empty($Pass))
      {
          echo 'Please Fill in the Blanks';
      }
      else {

      $query = " select * from admin where fname='$Fname'";
      $result = mysqli_query($con,$query);

      if($row=mysqli_fetch_assoc($result))
      {
          $db_password = $row['password'];
          if(md5($Pass)==$db_password)
          {
            
        
           
            header("location:admin/admin.php");
          
            
            
    
            
          }
          else
          {
              echo 'Incorrect Password';

          }
      }
      else
      {
          echo 'not process try agian';
      }
      }
    

   }





?>