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
$scidstr = $_POST['scidarr'];
$scidarr = explode(',',substr($scidstr, 0, -1));
$sql = "select uAddress,uTel from users where uID='$uid'";
$user = $admindb->ExecSQL($sql,$conn);
$address = $user[0][0];
$tel = $user[0][1];
	
$sql = "insert into orders(uID,oAddress,oTel) values('$uid','$address','$tel')";
$result = $admindb->ExecSQL($sql,$conn);
if($result){
	$sql = "select oID from orders where uID='$uid' and ofinish=0";
	$order = $admindb->ExecSQL($sql,$conn);
	$oid = $order[0][0];
	$totalcost = 0;
	foreach($scidarr as $scid){
		$sql = "select goods.gPrice from goods,shoppingcar where shoppingcar.scID='$scid' and shoppingcar.gID=goods.gID";
		$good = $admindb->ExecSQL($sql,$conn);
		$gprice = $good[0][0];
		
		$sql = "select * from shoppingcar where scID='$scid'";
		$arrcar = $admindb->ExecSQL($sql,$conn);
		$gid = $arrcar[0][2];
		$amount = $arrcar[0][3];
		
		$totalcost += $gprice*$amount;
		
		$size = $arrcar[0][4];
		$sql = "insert into suporders(oID,gID,sAmount,size) values('$oid','$gid','$amount','$size')";
		$result = $admindb->ExecSQL($sql,$conn);
		if(!$result){
			echo "<script>alert('生成订单详情失败！');</script>";
			echo "<script> window.location.href='../smarty/shoppingCar.php'; </script>";
		}else{
			$sql = "delete from shoppingcar where scID='$scid'";
			$result = $admindb->ExecSQL($sql,$conn);
			if(!$result){
				echo "<script>alert('购物车信息失败！');</script>";
			}
		}
	}
	$sql = "update orders set ofinish=1,totalCost='$totalcost' where oID='$oid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script>alert('生成订单成功！');</script>";
		echo "<script> window.location.href='../smarty/orderDetails.php?oid=".$oid."'; </script>";
	}
}else{
	echo "<script>alert('生成订单失败！');</script>";
	echo "<script> window.location.href='../smarty/shoppingCar.php'; </script>";
}

?>