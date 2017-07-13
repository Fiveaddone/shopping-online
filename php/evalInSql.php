<?php
require("sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$acmindb = new AdminDB();

if($_POST['submit'] == "提交"){
	$oid=$_POST['oid'];
	$gid = $_POST['gid'];
	$supid = $_POST['supid'];
	$score = $_POST['score'];
	$evaldetails = $_POST['evaldetails'];
	$sql = "insert into evaluation(supID,gID,uID,eScore,eDetails) values('$supid','$gid','$uid','$score','$evaldetails')";
	$result = $acmindb->ExecSQL($sql,$conn);
	
	if($result){
		$sql = "update suporders set state = 3 where supID='$supid'";
		$result = $acmindb->ExecSQL($sql,$conn);
		if($result){
			echo "<script >alert('评价成功');</script>";
			
		}else{
			echo "<script >alert('有点问题');</script>";
		}
		
		
	}else{
		echo "<script >alert('评价失败');</script>";
		
	}
	$connobj->CloseConnld();
	echo "<script>window.location.href='../smarty/orderDetails.php?oid=".$oid."';</script>";
}

?>