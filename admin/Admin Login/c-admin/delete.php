<?php

  require_once("connection.php");

  if(isset($_GET['Del']))
  {
      $ID = $_GET['Del'];
      $query = "delete from records where id='".$ID."'";
      $result = mysqli_query($con,$query);

      if($result)
      {
          header("location:view1.php");
      }
      else
      {
          echo 'Please Check Your Query';
      }
  }
  else
  {
    echo 'Please Check ';
  }



?>