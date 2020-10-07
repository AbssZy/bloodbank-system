<?php
try{
	session_start();
	$dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $name=$_POST['uname'];
	$bloodg=$_POST['bg'];
	$sex=$_POST['sex'];
	$contact=$_POST['contact'];
	$addr=$_POST['addr'];
	$dater=$_POST['dateofreceiving'];
	$q="INSERT into receiver(uname,contact,bg,addr,sex,dateofreceiving) VALUES ('$name','$contact','$bloodg','$addr','$sex','$dater')";

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
