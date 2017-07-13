<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}else{
	$uname = $_GET["name"];
}
$truename = $_GET["truename"];
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql = "select uTrueName from users where uName='$uname'";
$result = $admindb->ExecSQL($sql,$conn);

if($truename == $result[0][0]){
	$sql = "select uQuestion from users where uName='$uname'";
	$result = $admindb->ExecSQL($sql,$conn);
	$response = $result[0][0];
}else{
	$response = 0;
}
$connobj -> CloseConnld();
echo $response;
?>