<?php

 require_once('connection2.php');
   

 if(isset($_POST['submit']))
   {
  
    $Plocation=$_POST['plocation'];
    $Rlocation=$_POST['rlocation'];
    $Pdate=$_POST['pdate'];
    $Rdate=$_POST['rdate'];
    $FName=$_POST['name'];
 
    $Email=$_POST['email'];
   
    $Tno=$_POST['tno'];
   
  
   

   if(empty($Plocation) || empty($Rlocation) || empty($Pdate) || empty($Rdate) ||  empty($FName)  || empty( $Email) || empty($Tno))
    {
        echo 'Please Fill in the Blanks';
    }
   else
    {
   
        
        $sql = "insert into rent (plocation,rlocation,pdate,rdate,uname,email,tno) values('$Plocation','$Rlocation','$Pdate','$Rdate','$FName','$Email','$Tno')";
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