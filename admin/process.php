<?php

    require_once('connection2.php');
    session_start();

   if(isset($_POST['submit']))
   {
      $UName  = $_POST['uname'];
      $Pass = $_POST['password'];

      if(empty( $UName) || empty($Pass))
      {
         // echo 'Please Fill in the Blanks';
      }
      else {
      $query = " select * from admin where uname='$UName'";
      $result = mysqli_query($con,$query);

      if($row=mysqli_fetch_assoc($result))
      {
          $db_password = $row['password'];
          if($Pass==$db_password)
          {
            $_SESSION['uname']= $Uname;
            header("location:admin.php");   
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