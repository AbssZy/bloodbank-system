<?php
session_start();
try{
	$dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $name=$_POST['uname'];
	$bloodg=$_POST['bg'];
	$donorDate=$_POST['donorDate'];
	$donorTime=$_POST['donorTime'];
	$q="INSERT into donate(datedonate,timedonate,uname,bloodgroup) VALUES ('$donorDate','$donorTime','$name','$bloodg')";
if($dbh->exec($q)){
	$_SESSION["status"]="active";
    header("Location:dashboard.html");
   }
else{
  echo "ERROR: Couldn't Execute";
	}

}
catch(PDOException $e)
{
	echo "Connection failed:".$e->getMessage();
}

?>
