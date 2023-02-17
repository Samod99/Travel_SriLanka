<?php

 require_once('connection2.php');
   

 if(isset($_POST['submit']))
   {
    $Name=$_POST['name'];
    $Email=$_POST['email'];
   
    $Message=$_POST['message'];
  
   

   if(empty($Name) || empty($Email) || empty($Message))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        
        $sql = "insert into contact (name,email,message) values('$Name','$Email','$Message')";
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
    echo 'Please check your query';
   }





?>