<?php

  require_once("connection.php");

  if(isset($_GET['Del']))
  {
      $ID = $_GET['Del'];
      $query = "delete from contact where id='".$ID."'";
      $result = mysqli_query($con,$query);

      if($result)
      {
          header("location:contact_view.php");
      }
      else
      {
          echo 'Please Check Your Query';
      }
  }
  else
  {
    echo 'Please Check Your Query2';
  }



?>