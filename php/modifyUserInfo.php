<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();

if($_POST['subnewtel'] == "修改"){
	$tel = $_POST['tel'];
	$sql = "update users set uTel='$tel' where uID='$uid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('修改成功！');</script>";
		echo "<script>window.location.href='../smarty/userInfo.php';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}

if($_POST['subnewemail'] == "修改"){
	$email = $_POST['email'];
	$sql = "update users set uEmail='$email' where uID='$uid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('修改成功！');</script>";
		echo "<script>window.location.href='../smarty/userInfo.php';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}

if($_POST['subnewadd'] == "修改"){
	$address = $_POST['address'];
	$sql = "update users set uAddress='$address' where uID='$uid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('修改成功！');</script>";
		echo "<script>window.location.href='../smarty/userInfo.php';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}

?>