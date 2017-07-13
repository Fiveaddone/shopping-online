<?php
class ConnDB{
	var $dbtype;
	var $host;
	var $user;
	var $pwd;
	var $dbname;
	var $conn;
	function ConnDB($dbtype,$host,$user,$pwd,$dbname){
		$this->dbtype = $dbtype;
		$this->host = $host;
		$this->user = $user;
		$this->pwd = $pwd;
		$this->dbname = $dbname;
	}
	function GetConnld(){
		$this->conn = mysql_connect($this->host,$this->user,$this->pwd) or die("数据库服务器连接错误".mysql_error());
		mysql_select_db($this->dbname,$this->conn) or die("数据库访问错误".mysql_error());
		//mysql_query("set names gb2312");
		return $this->conn;
	}
	function CloseConnld(){
		mysql_close($this->conn);
	}
}

class AdminDB{
	function ExecSQL($sqltr,$conn){
		$array =array();
		$sqltype = strtolower(substr(trim($sqltr),0,6));
		$rs = mysql_query($sqltr);
		if($sqltype == "select"){
			$result = mysql_fetch_array($rs);
			if(count($result) == 0 || $rs == false){
				return false;
			}else{
				do{
					array_push($array,$result);
				}while($result = mysql_fetch_array($rs));
					
					return $array;
			}
		}else if($sqltype == "update" ||$sqltype == "insert" ||$sqltype == "delete" ){
			if($rs)
				return true;
			else
				return false;
		}
	}
}


class SepPage{
	var $rs;
	var $pagesize;
	var $nowpage;
	var $array;
	var $conn;
	var $sqltr;
	var $total;
	var $pagecount;
	function readGoods($sqlstr,$conn,$pagesize,$nowpage){
		$arrays=array();
		
		if(!isset($nowpage) || $nowpage =="" || $nowpage == 0){
			$this->nowpage = 1;
		}else{
			$this->nowpage = $nowpage;
		}
		$this->pagesize = $pagesize;
		$this->conn = $conn;
		$this->sqlstr = $sqlstr;
		$this->pagecount = $pagecount;
		$this->total = $total;
		$this->rs = mysql_query($this->sqlstr,$this->conn);
		$this->total = mysql_num_rows($this->rs);
		$this->rs = mysql_query($this->sqlstr." limit ".$this->pagesize*($this->nowpage-1).",$this->pagesize",$this->conn);
		
		if($this->total == 0){
			return array($arrays,0,0);
		}else{
			if(($this->total % $this->pagesize) == 0){
				$this->pagecount = intval($this->total / $this->pagesize);
			}else if($this->total <= $this->pagesize){
				$this->pagecount = 1;
			}else{
				$this->pagecount = ceil($this->total / $this->pagesize);
			}
			
			while($this->array = mysql_fetch_array($this->rs)){
				array_push($arrays,$this->array);
			}
			return array($arrays,$this->total,$this->pagecount);
		}
	}
	
	
	
}
?>