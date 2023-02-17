<?php

 require_once('connection.php');
   

 if(isset($_POST['submit']))
   {
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Tno=$_POST['tno'];
    $Message=$_POST['message'];
  
   

   if(empty($Name) || empty($Email) ||  empty($Tno) || empty($Message))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        
        $sql = "insert into contact (name,email,tno,message) values('$Name','$Email','$Tno','$Message')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            echo 'Send';
        }
        else
        {
            echo 'Please check your query';
        }
    
   }
}
   else
   {
    header("location:index.php");
   }





?>