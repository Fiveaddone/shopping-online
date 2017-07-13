<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}else{
	$uname = $_POST["rightname"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();

if($_POST['usubmit']=="提交"){
	$pwd = md5($_POST['pwd1']);
	$sql = "update users set uPassLogin='$pwd' where uName = '$uname'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		session_destroy();
		echo "<script>alert('修改成功！请用新密码登录!');</script>";
		echo "<script>window.location.href='../smarty/mainFace.php';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
		echo "<script>window.location.href='../smarty/userInfo.php';</script>";
	}
}
?>