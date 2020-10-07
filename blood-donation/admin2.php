<?php
try{
	$dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$dbh->query("SELECT * FROM donate");
    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $obj=array();
    $name=array();
    $datedonate=array();
    $timedonate=array();
    $bg=array();
    $len=count($results);
    $a=0;
   for($i=0;$i<$len;$i++){
    	$name[$a]=$results[$i]["uname"];
    	$datedonate[$a]=$results[$i]["datedonate"];
    	$timedonate[$a]=$results[$i]["timedonate"];
    	$bg[$a]=$results[$i]["bloodgroup"];
    	
    	$a++;
    }
    $obj[0]=$name;
    $obj[1]=$datedonate;
    $obj[2]=$timedonate;
    $obj[3]=$bg;
    echo json_encode($obj);


}
catch(PDOException $e)
{
	echo "Connection failed:".$e->getMessage();
}

?>
