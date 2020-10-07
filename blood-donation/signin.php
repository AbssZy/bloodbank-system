<?php
try{
	$dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
	$name=$_POST['donorName'];
	$bloodg=$_POST['bg'];
	$sex=$_POST['inlineRadioOptions'];
	$age=$_POST['age'];
	$contact=$_POST['contactNo'];
	$addr=$_POST['Add'];
	$email=$_POST['Email'];
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$q="INSERT into signin(name,bg,sex,age,contact,email,uname,password,addr) VALUES ('$name','$bloodg','$sex','$age','$contact','$email','$uname','$password','$addr')";

if($dbh->exec($q)){
	header("Location:index.html");
   
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
