<?php
require("sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
//$acmindb = new AdminDB();
$isexist = false;
$uname = $_GET["uname"];
$sql = mysql_query("select uName from users",$conn);

while(@($info = mysql_fetch_array($sql))){
	if(!strcmp($info[uName],$uname)){
		$isexist=true;
		break;
	}
}
$connobj -> CloseConnld();
if($isexist){
	$response = $uname;
}else{
	$response = 0;
}
echo $response;
?>