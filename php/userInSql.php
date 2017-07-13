<?php
require("sqlClass.php");
if($_POST['usubmit'] == "注册"){
	$name = $_POST['uname'];
	$lpwd = md5($_POST['ulpwd1']);
	
	$tel = $_POST['utel'];
	$email = $_POST['uemail'];
	$address = $_POST['uaddress'];
	$truename = $_POST['utruename'];
	$question = $_POST['uquestion'];
	$answer = md5($_POST['uanswer']);
	$sql = "insert into users(uName,uPassLogin,uTel,uEmail,uAddress,uTrueName,uQuestion,uAnswer) values('$name','$lpwd','$tel','$email','$address','$truename','$question','$answer')";
	
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();
	
	$isexist = false;
	$result = mysql_query("select sName from users",$conn);
	while(@($info = mysql_fetch_array($result))){
		if(!strcmp($info[uName],$name)){
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