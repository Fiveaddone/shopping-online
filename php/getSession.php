<?php
session_start();
$index = $_GET["index"];
if(!isset($_SESSION)){
	$response = "session不存在！";
}else{
	if(isset($_SESSION[$index])){
		$response = $_SESSION[$index];
	}else{
		$response = null;
	}
	
}
echo $response;
?>