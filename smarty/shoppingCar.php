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
$seppage = new SepPage();
$sql = "select distinct goods.gName,goods.gPrice,shoppingcar.* from shoppingcar,goods where shoppingcar.gID=goods.gID and shoppingcar.uID='$uid'";
$rs = mysql_query($sql,$conn);
$total = mysql_num_rows($rs);
$arrays = $admindb->ExecSQL($sql,$conn);


$smarty->assign('arrs',$arrays);
$smarty->assign('total',$total);
$smarty->display("shoppingCar.html");
?>