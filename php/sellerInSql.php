<?php
require("sqlClass.php");
if($_POST['ssubmit'] == "注册"){
	$sname = $_POST['sname'];
	$pwd = md5($_POST['spwd1']);
	$tel = $_POST['stel'];
	$email = $_POST['semail'];
	$truename = $_POST['struename'];
	$question = $_POST['squestion'];
	$answer = md5($_POST['sanswer']);
	$sql = "insert into seller(sName,sPassword,sTel,sEmail,sTrueName,sQuestion,sAnswer) values('$sname','$pwd','$tel','$email','$truename','$question','$answer')";
	
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();
	$isexist = false;
	$result = mysql_query("select sName from seller",$conn);
	while(@($info = mysql_fetch_array($result))){
		if(!strcmp($info[sName],$sname)){
			$isexist=true;
			break;
		}
	}
	if($isexist){
		echo "<script >alert('该用户名已存在，注册失败');</script>";
	}else{
		$acmindb = new AdminDB();
		$result = $acmindb->ExecSQL($sql,$conn);
		if($result){
			echo "<script >alert('注册成功');</script>";
		}else{
			echo "<script >alert('注册失败');</script>";
		}
	}
	$connobj->CloseConnld();
	echo "<script>window.location.href='../smarty/mainFace.php';</script>";
}
?>