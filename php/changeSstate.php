<?php
require("sqlClass.php");

$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$isforb = $_GET['isforb'];
$sid = $_GET['sid'];
$spage = $_GET['spage'];
$dispID = $_GET['dispID'];
$newisforb = 1 - $isforb;
$sql = "update seller set isForb = '$newisforb' where sID = '$sid'";
$result = $admindb->ExecSQL($sql,$conn);
if($result){
	echo "<script>alert('操作成功！');</script>";
	echo "<script>window.location.href='../smarty/AdminFace.php?upage=".$spage."&dispID=".$dispID."';</script>";
}else{
	echo "<script>alert('操作失败！');</script>";
	echo "<script>window.location.href='../smarty/AdminFace.php?upage=".$spage."&dispID=".$dispID."';</script>";
}

?>