<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='seller'){
	$sid = $_SESSION["id"];
	$sname = $_SESSION["name"];
}else{
	$sname = $_GET["name"];
}
$truename = $_GET["truename"];
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql = "select sTrueName from seller where sName='$sname'";
$result = $admindb->ExecSQL($sql,$conn);

if($truename == $result[0][0]){
	$sql = "select sQuestion from seller where sName='$sname'";
	$result = $admindb->ExecSQL($sql,$conn);
	$response = $result[0][0];
}else{
	$response = 0;
}
$connobj -> CloseConnld();
echo $response;
?>