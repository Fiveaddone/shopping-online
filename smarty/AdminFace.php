<?php
require("config.php");
require("../php/sqlClass.php");
session_start();
$type = $_SESSION["type"];
$aname = $_SESSION["name"];
$alevel = $_SESSION["level"];

$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$seppage = new SepPage();
$nowpage = 1;
$pagesize = 12;
$unowpage = 1;
$upagesize = 6;
$snowpage = 1;
$fnowpage = 1;
$tnowpage = 1;

if(isset($_GET['delfacata'])){              //删除一级类别
	$fid = $_GET['fid'];
	$sql = "delete from facata where fID = '$fid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "delete from catagories where fID = '$fid'";
		$admindb->ExecSQL($sql,$conn);
		echo "<script> alert('操作成功！');</script>";
	}else{
		echo "<script> alert('操作失败！');</script";
	}
}

if(isset($_GET['delcata'])){              //删除二级类别
	$fid = $_GET['fID'];
	$tid = $_GET['tid'];
	$sql = "delete from catagories where tID = '$tid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		$sql = "update facata set fAmount=fAmount-1 where fID = '$fid'";
		$admindb->ExecSQL($sql,$conn);
		$sql = "delete from goods where tID = '$tid'";
		$admindb->ExecSQL($sql,$conn);
		echo "<script> alert('操作成功！');</script>";
	}else{
		echo "<script> alert('操作失败！');</script";
	}
}

if(isset($_GET['grcom'])){              //推荐/取消推荐
	$grcom = 1-$_GET['grcom'];
	$gid = $_GET['gid'];
	$sql = "update goods set gRcom='$grcom' where gID = '$gid'";
	$result = $admindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script> alert('操作成功！');</script>";
	}else{
		echo "<script> alert('操作失败！');</script";
	}
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



if(isset($_GET['page'])){
	$nowpage = $_GET['page'];
}
if(isset($_GET['upage'])){
	$unowpage = $_GET['upage'];
}
if(isset($_GET['spage'])){
	$snowpage = $_GET['spage'];
}
if(isset($_GET['fpage'])){
	$fnowpage = $_GET['fpage'];
}

if(isset($_GET['tpage'])){
	$tnowpage = $_GET['tpage'];
}

$dispID = 0 ;
if(isset($_GET['dispID'])){
	$dispID = $_GET['dispID'];
}

$sql = "select * from goods";
$arrays = $seppage->readGoods($sql,$conn,$pagesize,$nowpage);

$usql = "select * from users";
$arrusers = $seppage->readGoods($usql,$conn,$upagesize,$unowpage);

$ssql = "select * from seller";
$arrsellers = $seppage->readGoods($ssql,$conn,$upagesize,$snowpage);

$fsql = "select * from facata";
$arrfacata = $seppage->readGoods($fsql,$conn,$upagesize,$fnowpage);

$tsql = "select * from catagories";
$arrcata = $seppage->readGoods($tsql,$conn,$upagesize,$tnowpage);


$arrdisplay = array();
$arrdisplay[0] = 'none';
for($i = 1 ; $i < $arrays[2]; $i ++){
	$arrdisplay[$i] = 'block';
}
$arrdisplay[$arrays[2]] = 'none';

$uarrdisplay = array();
$uarrdisplay[0] = 'none';
for($i = 1 ; $i < $arrusers[2]; $i ++){
	$uarrdisplay[$i] = 'block';
}
$uarrdisplay[$arrusers[2]] = 'none';

$sarrdisplay = array();
$sarrdisplay[0] = 'none';
for($i = 1 ; $i < $arrsellers[2]; $i ++){
	$sarrdisplay[$i] = 'block';
}
$sarrdisplay[$arrsellers[2]] = 'none';

$farrdisplay = array();
$farrdisplay[0] = 'none';
for($i = 1 ; $i < $arrfacata[2]; $i ++){
	$farrdisplay[$i] = 'block';
}
$farrdisplay[$arrfacata[2]] = 'none';

$tarrdisplay = array();
$tarrdisplay[0] = 'none';
for($i = 1 ; $i < $arrcata[2]; $i ++){
	$tarrdisplay[$i] = 'block';
}
$tarrdisplay[$arrcata[2]] = 'none';

$fasql = "select * from facata ";            //取所有一级类别
$facata = $admindb->ExecSQL($fasql,$conn);
$smarty->assign('facata',$facata);

$connobj->CloseConnld();

$smarty->assign('arrdisplay',$arrdisplay);     //
$smarty->assign('uarrdisplay',$uarrdisplay);
$smarty->assign('sarrdisplay',$sarrdisplay);
$smarty->assign('farrdisplay',$farrdisplay);
$smarty->assign('tarrdisplay',$tarrdisplay);

$smarty->assign('arrs',$arrays[0]);
$smarty->assign('total',$arrays[1]);
$smarty->assign('pagecount',$arrays[2]);
$smarty->assign('nowpage',$nowpage);

$smarty->assign('arrusers',$arrusers);
$smarty->assign('unowpage',$unowpage);

$smarty->assign('arrsellers',$arrsellers);
$smarty->assign('snowpage',$snowpage);

$smarty->assign('arrfacata',$arrfacata);
$smarty->assign('fnowpage',$fnowpage);

$smarty->assign('arrcata',$arrcata);
$smarty->assign('tnowpage',$tnowpage);

$smarty->assign('aname',$aname);
$smarty->assign('dispID',$dispID);

$smarty->display("AdminFace.html");
?>