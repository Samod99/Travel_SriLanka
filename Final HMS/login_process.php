<?php
    session_start();
    require_once('connection2.php');

   if(isset($_POST['submit']))
   {
      $Fname  = $_POST['fname'];
      $Pass = $_POST['password'];

      if(empty( $Fname) || empty($Pass))
      {
          echo 'Please Fill in the Blanks';
      }
      else {

      $query = " select * from records where fname='$Fname'";
      $result = mysqli_query($con,$query);

      if($row=mysqli_fetch_assoc($result))
      {
          $db_password = $row['password'];
          if(md5($Pass)==$db_password)
          {
            
        
            $_SESSION['firstname']= $Fname;
            header("location:insert.php");
          
            
            
    
            
          }
          else
          {
              echo 'Incorrect Password';

          }
      }
      else
      {
          echo 'Please Check Your Qyery';
      }
      }
    

   }





?>