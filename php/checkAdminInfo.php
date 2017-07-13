<?php
require("sqlClass.php");
if($_POST[asubmit] == "登录"){
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();

	$iscorrect = false;
	$aname = $_POST[aname];
	$apwd = md5($_POST[apwd]);
	$alevel = NULL;
	$sql = mysql_query("select * from admin",$conn);

	while(@($info = mysql_fetch_array($sql))){
		if($info[aName] == $aname && $info[aPwd] == $apwd){
			$alevel = $info[aLevel];
			$iscorrect=true;
			break;
		}
	}
	$connobj -> CloseConnld();
	if($iscorrect){
		session_start();
		$_SESSION["level"] = $alevel;
		$_SESSION["name"] = $aname;
		$_SESSION["type"] = 'admin';
		echo "<script>window.location.href='../smarty/AdminFace.php';</script>";
	}else{
		echo "<script>alert('用户名或密码错误！')</script>";
		echo "<script>window.location.href='../smarty/mainFace.php';</script>";
	}
}
?>