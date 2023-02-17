<?php

 require_once('connection2.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['fname'];
    $LName=$_POST['lname'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Nic=$_POST['nic'];
    $Tno=$_POST['tno'];
   
   

   if(empty($FName) || empty($LName) || empty($Email) || empty($Password)|| empty($Nic) ||  empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        $Pass = md5($Password);
        $sql = "insert into records (fname,lname,email,password,nic,tno) values('$FName','$LName','$Email','$Pass','$Nic','$Tno')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("location:room.php");
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