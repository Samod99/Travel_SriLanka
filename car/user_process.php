<?php

 require_once('connection.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['fname'];
   
    $Email=$_POST['email'];
    $Password=$_POST['password'];
  
    $Tno=$_POST['tno'];
   
   

   if(empty($FName) ||  empty($Email) || empty($Password)||  empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        $Pass = md5($Password);
        $sql = "insert into records (name,email,password,tno) values('$FName','$Email','$Pass','$Tno')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("location:fleet.php");
        }
        else
        {
            echo 'Please check your query';
        }
    
   }
}
   else
   {
    echo 'Please check';
   }





?>