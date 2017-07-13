<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='seller'){
	$sid = $_SESSION["id"];
	$sname = $_SESSION["name"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();

if($_POST['subnewtel'] == "修改"){
	$tel = $_POST['tel'];
	$sql = "update seller set sTel='$tel' where sID='$sid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('修改成功！');</script>";
		echo "<script>window.location.href='../smarty/sellerFace.php?dispID=checkinfo';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}

if($_POST['subnewemail'] == "修改"){
	$email = $_POST['email'];
	$sql = "update seller set sEmail='$email' where sID='$sid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('修改成功！');</script>";
		echo "<script>window.location.href='../smarty/sellerFace.php?dispID=checkinfo';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}

?>