<?php
require("sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$acmindb = new AdminDB();
if($_POST['uporder']=="提交订单"){
	$oid = $_POST['oid'];
	$sql = "update orders set ofinish =2 where oID='$oid'";
	$result = $acmindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script >alert('提交成功');</script>";
		echo "<script>window.location.href='../smarty/orderDetails.php?oid=".$oid."';</script>";
	}
}
if($_POST['deliver'] == "提醒他我已发货"){
	$supid = $_POST['supid'];
	$amount = $_POST['amount'];
	$sql = "update suporders set state = 1 where supID='$supid'";
	$result = $acmindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "select gID from suporders where supID='$supid'";
		$suporder = $acmindb->ExecSQL($sql,$conn);
		$gid = $suporder[0][0];
		$sql = "update goods set gStock = gStock-'$amount' where gID='$gid'";
		$result = $acmindb->ExecSQL($sql,$conn);
		if($result){	
			echo "<script >alert('提醒成功');</script>";
			echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
		}
	}
}
if(isset($_GET['supid'])){
	$supid = $_GET['supid'];
	$oid = $_GET['oid'];
	$sql = "update suporders set state = 2 where supID='$supid'";
	$result = $acmindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "select state from suporders where oID='oid'";
		$result = $acmindb->ExecSQL($sql,$conn);
		$com =true;
		foreach($result as $item){
			if($item[0] == 0||$item[0] == 1){
				$com = false;
				break;
			}
		}
		if($com){
			$sql = "update orders set ofinish = 3 where oID='$oid'";
			$acmindb->ExecSQL($sql,$conn);
		}
		echo "<script >alert('操作成功');</script>";
		echo "<script>window.location.href='../smarty/orderDetails.php?oid=".$oid."';</script>";
	}
}

?>