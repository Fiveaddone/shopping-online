<?php
require("config.php");
require("../php/sqlClass.php");

$gid = $_GET['gid'];

$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
$conn = $connobj -> GetConnld();
$admindb = new AdminDB();
$sql = "select * from goods where gID = '$gid'";
$arrays = $admindb->ExecSQL($sql,$conn);
$fid = $arrays[0][4] ;
$tid = $arrays[0][3] ;
$facata = $admindb->ExecSQL("select * from facata where fID='$fid'",$conn);
$cata = $admindb->ExecSQL("select * from catagories where tID='$tid'",$conn);

$sql = "select evaluation.*,users.uName from evaluation,users where evaluation.gID = '$gid' and users.uID=evaluation.uID";
$evalarr = $admindb->ExecSQL($sql,$conn);
$result = mysql_query($sql,$conn);
$evalnum = mysql_num_rows($result);
$totalscore = 0;
$score = 0;
if($evalnum!=0){
	foreach($evalarr as $item){
		$totalscore += $item[4];
	}
	$score = $totalscore/$evalnum;
}

$connobj->CloseConnld();

$smarty->assign('evalarr',$evalarr);
$smarty->assign('evalnum',$evalnum);
$smarty->assign('score',$score);


$smarty->assign('arr',$arrays[0]);
$smarty->assign('fid',$fid);
$smarty->assign('fname',$facata[0][1]);
$smarty->assign('tid',$tid);
$smarty->assign('tname',$cata[0][1]);
$smarty->display("goodsDetails.html");
?>