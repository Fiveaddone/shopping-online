<?php
require("config.php");
require("../php/sqlClass.php");
$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$seppage = new SepPage();
$nowpage = 1;
$pagesize = 12;
$fid = 0;

$tid = 0;
$search = NULL;
$sql = "select * from goods ";

if(isset($_GET['searchtext'])){
	if($_GET['searchtext']!=''){
		$search = $_GET['searchtext'];
		$sql.="where gName like '%".$search."%'";
	}
}

if(isset($_GET['page'])){
	$nowpage = $_GET['page'];
}

if(isset($_GET['fid'])){
	if($_GET['fid'] != 0){
		$fid = $_GET['fid'];
		if(isset($_GET['tid'])){
			if($_GET['tid'] != 0){
				$tid = $_GET['tid'];
				$sql.="where tID = '$tid'";
			}else{
				$sql.="where fID = '$fid'";
			}
		}
	}
}

$arrays = $seppage->readGoods($sql,$conn,$pagesize,$nowpage);


$facata = $admindb->ExecSQL("select * from facata where fID='$fid'",$conn);
$cata = $admindb->ExecSQL("select * from catagories where tID='$tid'",$conn);
$connobj -> CloseConnld();

$arrdisplay = array();
$arrdisplay[0] = 'none';
for($i = 1 ; $i < $arrays[2]; $i ++){
	$arrdisplay[$i] = 'block';
}
$arrdisplay[$arrays[2]] = 'none';
$smarty->assign('arrdisplay',$arrdisplay);
$smarty->assign('arrs',$arrays[0]);
$smarty->assign('total',$arrays[1]);
$smarty->assign('pagecount',$arrays[2]);
$smarty->assign('nowpage',$nowpage);
$smarty->assign('tid',$tid);
$smarty->assign('tname',$cata[0][1]);
$smarty->assign('fid',$fid);
$smarty->assign('searchtext',$search);
$smarty->assign('fname',$facata[0][1]);
$smarty->display("goodsList.html");

?>