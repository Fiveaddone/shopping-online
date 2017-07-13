<?php
require("config.php");
require("../php/sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}

$oid = $_GET['oid'];
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql ="select distinct orders.*,goods.gName,goods.gPrice,suporders.* from orders,goods,suporders where orders.oID='$oid' and orders.oID=suporders.oID and goods.gID=suporders.gID";
$orderarr = $admindb->ExecSQL($sql,$conn);

$smarty->assign('uname',$uname);
$smarty->assign('orderarr',$orderarr);
$smarty->display("orderDetails.html");
?>