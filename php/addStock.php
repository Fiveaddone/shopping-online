<?php
require("sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$acmindb = new AdminDB();
if($_POST['substock']=="添加库存"){
	$stock = $_POST['addstock'];
	$gid = $_POST['gid'];
	$sql = "update goods set gStock=gStock+'$stock' where gID='$gid'";
	$result = $acmindb->ExecSQL($sql,$conn);
	$connobj->CloseConnld();
	if($result){
		echo "<script >alert('添加成功');</script>";
		echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
	}else{
		echo "<script >alert('添加失败');</script>";
		//echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
	}
}
?>