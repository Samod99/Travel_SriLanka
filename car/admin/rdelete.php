<?php

  require_once("connection.php");

  if(isset($_GET['Del']))
  {
      $ID = $_GET['Del'];
      $query = "delete from rent where id='".$ID."'";
      $result = mysqli_query($con,$query);

      if($result)
      {
          header("location:view.php");
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