<?php

 require_once('connection2.php');
   

   if(isset($_POST['submit']))
   {
    $UName = mysqli_real_escape_string($con,$_POST['uname']);
    $Email = mysqli_real_escape_string($con,$_POST['email']);
    $Password = mysqli_real_escape_string($con,$_POST['password']);
    $CPassword = mysqli_real_escape_string($con,$_POST['cpass']);
    $Tno = mysqli_real_escape_string($con,$_POST['tno']);

    if(empty($UName) || empty($Email) ||empty($Password) || empty($CPassword)  || empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
    if($Password!=$CPassword)
    {
        echo 'Password Not Match';
    }
    else
    {
        $Pass = md5($Password);
        $sql = "insert into records (uname,email,password,tno) values('$UName','$Email','$Pass','$Tno')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("location:index.php");  
        }
        else
        {
            echo 'Please check your query';
        }
    }
   }
   else{

    echo 'Please check your query';
   }





?>