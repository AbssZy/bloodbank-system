<?php
session_start();
try{
$id=0;
$db= new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$name = $_SESSION['name'];
$msg = $_REQUEST['msg'];
$friend="admin";
$ar=explode(" ",$friend);
$ar2=explode(" ",$name);
$id++;
$sql = "INSERT INTO chatbox (id,username,msg,receiver) VALUES ('$id','$name', '$msg','$friend')";
$db->exec($sql);
$stmt=$db->query("SELECT * FROM chatbox WHERE (username LIKE  '$ar2[0]%' and receiver LIKE '$ar[0]%') or (username LIKE'$ar[0]%' and receiver LIKE'$ar2[0]%') ORDER by id DESC");
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row){
	$username=htmlentities($row['username']);
	$message=htmlentities($row['msg']);
	echo $username. ":".$message."</br>";
}
}
catch(PDOException $e){
echo $e->getMessage();
}
?>


