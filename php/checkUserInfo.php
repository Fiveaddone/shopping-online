<?php
require("sqlClass.php");
if($_POST[usubmit] == "登录"){
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();

	$iscorrect = false;
	$uname = $_POST[uname];
	$upwd = md5($_POST[upwd]);
	$returnpage=$_POST['nowpage'];
	$uID = null;
	$isforb = 0;
	$sql = mysql_query("select uID,uName,uPassLogin,isForb from users",$conn);

	while(@($info = mysql_fetch_array($sql))){
		if($info[uName] == $uname && $info[uPassLogin] == $upwd){
			$uID = $info[uID];
			$iscorrect=true;
			$isforb = $info[isForb];
			break;
		}
	}
	$connobj -> CloseConnld();
	if($isforb != 0){
		echo "<script>alert('由于违规操作，您的账号已被冻结！请联系管理员解封。谢谢合作！')</script>";
		
	}else if($iscorrect){
		session_start();
		$_SESSION["id"] = $uID;
		$_SESSION["name"] = $uname;
		$_SESSION["type"] = 'user';
	}else{
		echo "<script>alert('用户名或密码错误！')</script>";
	}
	echo "<script>window.location.href='../smarty/".$returnpage."';</script>";
}
?>