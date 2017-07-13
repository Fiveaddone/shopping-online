<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}else{
	$uname = $_GET["name"];
}
$answer = md5($_GET["answer"]);
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql = "select uAnswer from users where uName='$uname'";
$result = $admindb->ExecSQL($sql,$conn);
$connobj -> CloseConnld();
if($answer == $result[0][0]){
	$response = 1;
}else{
	$response = 0;
	}
echo $response;
?>