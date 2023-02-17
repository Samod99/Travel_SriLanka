<?php

 require_once('connection.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['fname'];
    $LName=$_POST['lname'];
    $Email=$_POST['email'];
    $Nic=$_POST['nic'];
    $Tno=$_POST['tno'];
   
    $City=$_POST['city'];
    $Country=$_POST['country'];
   

   if(empty($FName) || empty($LName) || empty($Email) || empty($Nic) ||  empty($Tno)  || empty($City) || empty($Country))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        
        $sql = "insert into records (fname,lname,email,nic,tno,city,country) values('$FName','$LName','$Email','$Nic','$Tno','$City','$Country')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("location:main.php");
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