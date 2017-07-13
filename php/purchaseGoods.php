<?php
require("../php/sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}
$gid = $_POST['gid'];
$camount = $_POST['puramount'];
$size = $_POST['size'];
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
if($_POST[action] == "加入购物车"){
	$sql = "insert into shoppingcar(uID,gID,cAmount,size) values('$uid','$gid','$camount','$size')";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script> if(confirm('加入购物车成功！是否进入购物车？')) {window.location.href='../smarty/shoppingCar.php'; }else{window.location.href='../smarty/goodsDetails.php?gid=".$gid."'; }</script>";
	}else {
		echo "<script>alert('加入购物车失败！');</script>";
		echo "<script> window.location.href='../smarty/goodsDetails.php?gid=".$gid."'; </script>";
	}
}else if($_POST[action] == "现在购买"){
	$sql = "select gPrice from goods where gID='$gid'";
	$good = $admindb->ExecSQL($sql,$conn);
	$gprice = $good[0][0];
	$totalcost = $gprice*$camount;
	
	$sql = "select uAddress,uTel from users where uID='$uid'";
	$user = $admindb->ExecSQL($sql,$conn);
	$address = $user[0][0];
	$tel = $user[0][1];
	
	$sql = "insert into orders(uID,totalCost,oAddress,oTel) values('$uid','$totalcost','$address','$tel')";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "select oID from orders where uID='$uid' and ofinish=0";
		$order = $admindb->ExecSQL($sql,$conn);
		$oid = $order[0][0];
		$sql = "insert into suporders(oID,gID,sAmount,size) values('$oid','$gid','$camount','$size')";
		$result = $admindb->ExecSQL($sql,$conn);
		if(!$result){
			echo "<script>alert('生成订单详情失败！');</script>";
			echo "<script> window.location.href='../smarty/goodsDetails.php'; </script>";
		}
		$sql = "update orders set ofinish=1 where oID='$oid'";
		$result = $admindb->ExecSQL($sql,$conn);
		if($result){
			echo "<script>alert('生成订单成功！');</script>";
			echo "<script> window.location.href='../smarty/orderDetails.php?oid=".$oid."'; </script>";
		}else{
			echo "<script>alert('生成订单失败！');</script>";
			echo "<script> window.location.href='../smarty/goodsDetails.php'; </script>";
		}
	}
}
?>