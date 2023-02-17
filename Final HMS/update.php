<?php

 require_once('connection2.php');
   

 if(isset($_POST['submit']))
   {
    $FName=$_POST['name'];
    $Date=$_POST['date'];
    $Email=$_POST['email'];
    $Type=$_POST['type'];
    $City=$_POST['city'];
    $Country=$_POST['country'];
    $Tno=$_POST['tno'];
   
   

   if(empty($FName) || empty($Date) || empty($Email) || empty($Type)|| empty($City) || empty($Country) ||  empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        
        $sql = "insert into room (name,email,tno,type,city,country,date) values('$FName','$Email','$Tno','$Type','$City','$Country','$Date')";
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