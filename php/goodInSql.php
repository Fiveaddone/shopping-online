<?php
require("sqlClass.php");
function radomname($length,$chars = '123456789'){
	$hash = '';
	$max = strlen($chars) - 1;
	for($i = 0; $i < $length; $i++) {
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}
function get_file_type($filename){ 
	$type = substr($filename, strrpos($filename, ".")); 
	return $type; 
}
if($_POST['gsubmit'] == "提交"){
	$gname = $_POST['gname'];
	$gprice = $_POST['gprice'];
	$fid = $_POST['cata'];
	$tid = $_POST[$fid];
	session_start();
	$sid = $_SESSION["id"];
	$gintro = $_POST['gintro'];
	$gstock = $_POST['gstock'];
	
	$path1 = radomname(5,'abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ').radomname(4).get_file_type($_FILES['gpicture']['name']);	
	while (file_exists("../upfiles/" . $path1)){
		$str_arr = explode('.',$path1);
		$str_arr[0].=radomname(1);
		$path1 = implode('.',$str_arr);
	}
	$path = "upfiles/".$path1;
	$gpicture = $path;
	move_uploaded_file($_FILES["gpicture"]["tmp_name"],"../".$path);

	$sql = "insert into goods(gName,gPrice,tID,fID,sID,gIntro,gPicture,gStock) values('$gname','$gprice','$tid','$fid','$sid','$gintro','$gpicture','$gstock')";
	$connobj = new ConnDB("mysql","localhost","root","ty123456","shopping_online");
	$conn = $connobj -> GetConnld();
	$acmindb = new AdminDB();
	$result = $acmindb->ExecSQL($sql,$conn);
	$sql1 = "select tSpec_num from catagories where tID = '$tid'";
	
	$result1 = mysql_query($sql1,$conn);
	
	$info = mysql_fetch_array($result1);
	$num = $info[tSpec_num]+1;
	$sql2 = "update catagories set tSpec_num ='$num' where tID = '$tid'";
	$result2 =  mysql_query($sql2 ,$conn);
	
	if($result){
		echo "<script >alert('提交成功');</script>";
	}else{
		echo "<script >alert('提交失败');</script>";
	}
	$connobj->CloseConnld();
	echo "<script>window.location.href='../smarty/sellerFace.php';</script>";
}
?>
