<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='seller'){
	$sid = $_SESSION["id"];
	$sname = $_SESSION["name"];
}else{
	$sname = $_POST["rightname"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();

if($_POST['usubmit']=="提交"){
	$pwd = md5($_POST['pwd1']);
	$sql = "update seller set sPassword='$pwd' where sName = '$sname'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		session_destroy();
		echo "<script>alert('修改成功！请用新密码登录!');</script>";
		echo "<script>window.location.href='../smarty/mainFace.php';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
		echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
	}
}
?>