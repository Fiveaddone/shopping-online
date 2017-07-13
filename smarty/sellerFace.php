<?php
require("config.php");
require("../php/sqlClass.php");
session_start();
if($_SESSION["type"]=='seller'){
	$sid = $_SESSION["id"];
	$sname = $_SESSION["name"];
}

$dispID = "goodsuploaded";
if(isset($_GET['dispID'])){
	$dispID = $_GET['dispID'];
}

$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$seppage = new SepPage();
$nowpage = 1;
$pagesize = 12;
if(isset($_GET['page'])){
	$nowpage = $_GET['page'];
}

if(isset($_GET['delete'])){               //删除商品
	$gid = $_GET['gid'];
	$tid = $_GET['tid'];
	$file = "../".$_GET['gpicture'];
	if (!unlink($file)){
  		echo "<script> alert('图片删除失败！');</script>";
	}else{
  		$sql = "delete from goods where gID = '$gid'";
		$result = $admindb->ExecSQL($sql,$conn);
		
		if($result){
			$sql = "update catagories set tSpec_num=tSpec_num-1 where tID = '$tid'";
			$admindb->ExecSQL($sql,$conn);
			echo "<script> alert('删除成功！');</script>";
		}else{
			echo "<script> alert('数据删除失败！');</script";
		}
  	}
}

$sql = "select * from goods where sID = '$sid'";
$arrays = $seppage->readGoods($sql,$conn,$pagesize,$nowpage);
$arrdisplay = array();
$arrdisplay[0] = 'none';
for($i = 1 ; $i < $arrays[2]; $i ++){
	$arrdisplay[$i] = 'block';
}
$arrdisplay[$arrays[2]] = 'none';

$sql1 = "select * from facata";
$facata = $admindb->ExecSQL($sql1,$conn);
$arrayclass = array();
foreach($facata as $value){
	$str = $value[fID];
	$sql2 = "select tID,tName,fID from catagories where fID = '$str'";
	$catagories = $admindb->ExecSQL($sql2,$conn);
	array_push($arrayclass,array($value,$catagories));
}

$sql = "select users.uName,goods.gName,orders.oTime,orders.oAddress,orders.oTel,suporders.sAmount,suporders.size,suporders.supID from users,goods,orders,suporders where orders.oID=suporders.oID and suporders.gID=goods.gID and users.uID=orders.uID and suporders.state=0 and orders.ofinish=2 and goods.sID='$sid'";
$orderarr = $admindb->ExecSQL($sql,$conn);
$result = mysql_query($sql,$conn);
$total0 = mysql_num_rows($result);

$sql = "select users.uName,goods.gName,orders.oTime,orders.oAddress,orders.oTel,suporders.sAmount,suporders.size,suporders.supID from users,goods,orders,suporders where orders.oID=suporders.oID and suporders.gID=goods.gID and users.uID=orders.uID and suporders.state=1 and orders.ofinish=2 and goods.sID='$sid'";
$orderarr1 = $admindb->ExecSQL($sql,$conn);
$result = mysql_query($sql,$conn);
$total1 = mysql_num_rows($result);

$sql = "select users.uName,goods.gName,orders.oTime,orders.oAddress,orders.oTel,suporders.sAmount,suporders.size,suporders.supID from users,goods,orders,suporders where orders.oID=suporders.oID and
		suporders.gID=goods.gID and users.uID=orders.uID and suporders.state in(2,3) and orders.ofinish in (2,3) and goods.sID='$sid'";
$orderarr2 = $admindb->ExecSQL($sql,$conn);
$result = mysql_query($sql,$conn);
$total2 = mysql_num_rows($result);

$sql = "select * from seller where sID='$sid'";
$sellerinfo = $admindb->ExecSQL($sql,$conn);


$connobj->CloseConnld();

$smarty->assign('sellerinfo',$sellerinfo[0]);

$smarty->assign('arrayclass',$arrayclass);

$smarty->assign('orderarr',$orderarr);
$smarty->assign('orderarr1',$orderarr1);
$smarty->assign('orderarr2',$orderarr2);

$smarty->assign('total0',$total0);
$smarty->assign('total1',$total1);
$smarty->assign('total2',$total2);

$smarty->assign('arrdisplay',$arrdisplay);
$smarty->assign('arrs',$arrays[0]);
$smarty->assign('total',$arrays[1]);
$smarty->assign('pagecount',$arrays[2]);
$smarty->assign('nowpage',$nowpage);

$smarty->assign('dispID',$dispID);
$smarty->assign('sname',$sname);
$smarty->display("sellerFace.html");
?>