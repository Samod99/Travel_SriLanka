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
      $query = " select * from records where uname='$UName'";
      $result = mysqli_query($con,$query);

      if($row=mysqli_fetch_assoc($result))
      {
          $db_password = $row['password'];
          if(md5($Pass)==$db_password)
          {
            $_SESSION['uname']= $UName;
            header("location:car/index.php");   
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