<?php
require("sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
//$acmindb = new AdminDB();
$isexist = false;
$sname = $_GET["sname"];
$sql = mysql_query("select sName from seller",$conn);

while(@($info = mysql_fetch_array($sql))){
	if(!strcmp($info[sName],$sname)){
		$isexist=true;
		break;
	}
}
$connobj -> CloseConnld();
if($isexist){
	$response = $sname;
}else{
	$response = 0;
}
echo $response;
?>