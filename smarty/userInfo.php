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

$sql = "select * from users where uID='$uid'";
$userinfo = $admindb->ExecSQL($sql,$conn);

$smarty->assign('userinfo',$userinfo[0]);

$smarty->assign('uname',$uname);
$smarty->display("userInfo.html");
?>