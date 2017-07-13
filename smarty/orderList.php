<?php
require("config.php");
require("../php/sqlClass.php");
session_start();
if($_SESSION["type"]=='user'){
	$uid = $_SESSION["id"];
	$uname = $_SESSION["name"];
}
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql = "select * from orders where uID = '$uid'";
$rs = mysql_query($sql,$conn);
$total = mysql_num_rows($rs);

$orderarr = $admindb->ExecSQL($sql,$conn);

$smarty->assign('total',$total);
$smarty->assign('uname',$uname);
$smarty->assign('orderarr',$orderarr);
$smarty->display('orderList.html');
?>