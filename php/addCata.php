<?php
require("sqlClass.php");
if($_POST['fsubmit'] == "添加"){
	$id = $_POST['fid'];
	$name = $_POST['fname'];
	$sql = "insert into facata(fID,fName) values('$id','$name')";
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();
	$acmindb = new AdminDB();
	$result = $acmindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script >alert('添加成功');</script>";
		
	}else{
		echo "<script >alert('添加失败');</script>";
	}
	$connobj->CloseConnld();
	echo "<script>window.location.href='../smarty/AdminFace.php?dispID=3';</script>";
	
}

if($_POST['tsubmit'] == "添加"){
	$id = $_POST['tid'];
	$name = $_POST['tname'];
	$fid = $_POST['fID'];
	$sql = "insert into catagories(tID,tName,fID) values('$id','$name','$fid')";
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();
	$acmindb = new AdminDB();
	$result = $acmindb->ExecSQL($sql,$conn);
	$sql = "update facata set fAmount = fAmount+1 where fID='$fid'";
	$acmindb->ExecSQL($sql,$conn);
	if($result){
		echo "<script >alert('添加成功');</script>";
		
	}else{
		echo "<script >alert('添加失败');</script>";
	}
	$connobj->CloseConnld();
	echo "<script>window.location.href='../smarty/AdminFace.php?dispID=4';</script>";
	
}

?>    