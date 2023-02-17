<?php

 require_once('connection.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['fname'];
    
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Nic=$_POST['nic'];
    $Tno=$_POST['tno'];
   
   
   

   if(empty($FName) ||  empty($Email) || empty($Password) ||   empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        $Pass = md5($Password);
        $sql = "insert into admin (name,email,password,nic,tno) values('$FName','$Email','$Pass','$Nic','$Tno')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            echo 'sccsess';
        }
        else
        {
            echo 'Please check your query';
        }
    
   }
}
   else
   {
    echo 'Please check your query2';
   }





?>