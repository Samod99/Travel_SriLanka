<?php

 require_once('connection.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['fname'];
    $LName=$_POST['lname'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Nic=$_POST['nic'];
    $Tno=$_POST['tno'];
    $Gender=$_POST['gender'];
    $Language=$_POST['language'];
   
   

   if(empty($FName) || empty($LName) || empty($Email) || empty($Password) || empty($Nic) ||  empty($Tno) || empty($Gender) || empty($Language))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        $Pass = md5($Password);
        $sql = "insert into admin (fname,lname,email,password,nic,tno,gender,language) values('$FName','$LName','$Email','$Pass','$Nic','$Tno','$Gender','$Language')";
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