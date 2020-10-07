<?php 
$dbh=new PDO('mysql:host=localhost;dbname=blooddonation;charset=utf8','root','');
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$bg=$_POST["bg"];
$stmt=$dbh->query("SELECT * FROM donate");
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
$k=0;
foreach($results as $row){
 $bloodg=htmlentities($row['bloodgroup']);
 if($bg==$bloodg){
header("Location:recieverForm.html");
$k=1;
}
}
if($k==0){
echo '<script language="javascript">';
echo 'alert("We do not have blood of required blood group")';
echo '</script>';	

}
?>