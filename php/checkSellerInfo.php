<?php
require("sqlClass.php");
if($_POST[ssubmit] == "登录"){
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();

	$iscorrect = false;
	$sname = $_POST[sname];
	$spwd = md5($_POST[spwd]);
	$sID = null;
	$isforb = 0;
	$sql = mysql_query("select sID,sName,sPassword,isForb from seller",$conn);

	while(@($info = mysql_fetch_array($sql))){
		if($info[sName] == $sname && $info[sPassword] == $spwd){
			$iscorrect=true;
			$sID = $info[sID];
			$isforb = $info[isForb];
			break;
		}
	}
	$connobj -> CloseConnld();
	if($isforb != 0){
		echo "<script>alert('您的账号已被冻结！')</script>";
		echo "<script>window.location.href='../smarty/mainFace.php';</script>";
	}else if($iscorrect){
		session_start();
		$_SESSION["id"] = $sID;
		$_SESSION["name"] = $sname;
		$_SESSION["type"] = 'seller';
		echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
	}else{
		echo "<script>alert('用户名或密码错误！')</script>";
		echo "<script>window.location.href='../smarty/mainFace.php';</script>";
	}
}
?>