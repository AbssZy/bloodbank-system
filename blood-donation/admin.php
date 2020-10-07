<?php
try{
    $dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$dbh->query("SELECT * FROM receiver");
    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $obj=array();
    $name=array();
    $contact=array();
    $address=array();
    $dateofreceiving=array();
    $bg=array();
    $sex=array();
    $len=count($results);
    $a=0;
   for($i=0;$i<$len;$i++){
        $name[$a]=$results[$i]["uname"];
        $contact[$a]=$results[$i]["contact"];
        $address[$a]=$results[$i]["addr"];
        $bg[$a]=$results[$i]["bg"];
        $sex[$a]=$results[$i]["sex"];
        $dateofreceiving[$a]=$results[$i]["dateofreceiving"];
        $a++;
    }
    $obj[0]=$name;
    $obj[1]=$contact;
    $obj[2]=$address;
    $obj[3]=$bg;
    $obj[4]=$sex;
    $obj[5]=$dateofreceiving;
echo json_encode($obj);


}
catch(PDOException $e)
{
    echo "Connection failed:".$e->getMessage();
}

?>
