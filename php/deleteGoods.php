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
if(isset($_GET['scid'])){
	$scid = $_GET['scid'];
	$sql = "delete from shoppingcar where scID='$scid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('删除成功！');</script>";
		
	}else{
		echo "<script>alert('删除失败！');</script>";
	}
	echo "<script>window.location.href='../smarty/shoppingCar.php';</script>";
}

if(isset($_GET['oid'])){
	$oid = $_GET['oid'];
	$sql = "delete from suporders where oID='$oid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "delete from orders where oID='$oid'";
		$result = $admindb->ExecSQL($sql,$conn);
		if($result){
			echo "<script>alert('删除成功！');</script>";
		}else{
			echo "<script>alert('删除失败！');</script>";
		}
	}else{
		echo "<script>alert('删除失败！');</script>";
	}
	echo "<script>window.location.href='../smarty/orderList.php';</script>";
}

?>