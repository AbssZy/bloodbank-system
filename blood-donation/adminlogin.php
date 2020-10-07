<?php
session_start();
try{
   $_SESSION['status']="active";
    $uname=$_POST['name'];
    $passwd=$_POST['password'];
    $username="admin";
    $password="1234";
    $k=0;

    if($username==$uname){
        if($password==$passwd){
            $k=1;
            $_SESSION['name']="admin";
header("Location:adminstrator.html");
       }
   }
   if($k==0)
    {
        echo"Invalid Username or Password"; 
        
    }
}
catch(PDOException $e)
{
    echo "Connection failed:".$e->getMessage();
}

?>
