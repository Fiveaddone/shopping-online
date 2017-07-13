<?php
require("sqlClass.php");

$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$isforb = $_GET['isforb'];
$uid = $_GET['uid'];
$upage = $_GET['upage'];
$dispID = $_GET['dispID'];
$newisforb = 1 - $isforb;
$sql = "update users set isForb = '$newisforb' where uID = '$uid'";
$result = $admindb->ExecSQL($sql,$conn);
if($result){
	echo "<script>alert('操作成功！');</script>";
	echo "<script>window.location.href='../smarty/AdminFace.php?upage=".$upage."&dispID=".$dispID."';</script>";
}else{
	echo "<script>alert('操作失败！');</script>";
	echo "<script>window.location.href='../smarty/AdminFace.php?upage=".$upage."&dispID=".$dispID."';</script>";
}

?>