<?php
require("config.php");
require("../php/sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$seppage = new SepPage();
$nowpage = 1;
$pagesize = 12;
if(isset($_GET['page'])){
	$nowpage = $_GET['page'];
}

$sql1 = "select * from facata";
$facata = $admindb->ExecSQL($sql1,$conn);
$arrayclass = array();
foreach($facata as $value){
	$str = $value[fID];
	$sql2 = "select tID,tName,fID from catagories where fID = '$str'";
	$catagories = $admindb->ExecSQL($sql2,$conn);
	array_push($arrayclass,array($value,$catagories));
}
$arrays = array();
$sql = "select * from goods where gRcom = '1'";
$arrays = $seppage->readGoods($sql,$conn,$pagesize,$nowpage);
$connobj->CloseConnld();

$arrdisplay = array();
$arrdisplay[0] = 'none';
for($i = 1 ; $i < $arrays[2]; $i ++){
	$arrdisplay[$i] = 'block';
}
$arrdisplay[$arrays[2]] = 'none';

$smarty->assign('arrdisplay',$arrdisplay);
$smarty->assign('arrays',$arrays);
$smarty->assign('nowpage',$nowpage);

$smarty->assign('arrayclass',$arrayclass);
$smarty->display("mainFace.html");
?>