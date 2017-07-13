<?php
/* Smarty version 3.1.30, created on 2016-12-21 13:58:24
  from "C:\AppServ\www\shopping_online\smarty\tpl\mainFace.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a1a003a8a88_58036046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce38dc89a93a2d07c47c60d767df7b11794da9f5' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\mainFace.html',
      1 => 1482299896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a1a003a8a88_58036046 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>系统主页面</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
  
<style>
.nav
 > li:hover .dropdown-menu {
	 display: block;
}
.dropdown-menu {
	margin:0 0 0 ;
}
#footer {
	background-color:#333;
    color:#666;
    clear:both;
    text-align:center;
	
	margin-top:30px;
	padding-top:10px;
	padding-bottom:10px;
	
	bottom: 0;
	width: 100%;
	z-index:1000;
 }
 #header {
	z-index:1000;
	position:fixed;
	top:0;
	width: 100%;
 } 
.color{
	color:#CCC; text-decoration:none;
}
.color:hover{
	color:#CF0000; text-decoration:underline;
}
  
</style>

<?php echo '<script'; ?>
 src="../js/getSession.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="../js/checkUser.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="../js/checkSeller.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>    
$(document).ready(function(){
    $(document).off('click.bs.dropdown.data-api');
});

function checkUser(form){
	if(form.uname.value == ""){
		alert('用户名不能为空！');
		form.uname.focus();
		return false;
	}
	if(form.upwd.value == ""){
		alert('密码不能为空！');
		form.upwd.focus();
		return false;
	}
	form.submit();
}

function checkSeller(form){
	if(form.sname.value == ""){
		alert('用户名不能为空！');
		form.sname.focus();
		return false;
	}
	if(form.spwd.value == ""){
		alert('密码不能为空！');
		form.spwd.focus();
		return false;
	}
	form.submit();
}

function checkAdmin(form){
	if(form.aname.value == ""){
		alert('用户名不能为空！');
		form.asname.focus();
		return false;
	}
	if(form.apwd.value == ""){
		alert('密码不能为空！');
		form.apwd.focus();
		return false;
	}
	form.submit();
}

function checkSearchNull(form){
	if(form.searchtext.value == ""){
		alert('搜索内容不能为空！');
		form.searchtext.focus();
		return false;
	}else{
		form.submit();
	}
}

function nav(){
	var type = getSession("type");
	var uname = getSession("name");
	if(type == 'user'){
		document.getElementById("register").style.display="none";
		document.getElementById("s_login").style.display="none";
		document.getElementById("u_login").style.display="none";
		document.getElementById("admin_login").style.display="none";
		document.getElementById("u_logined").innerHTML=uname;
	}else{
		document.getElementById("u_quit").style.display="none";
		document.getElementById("u_logined").style.display="none";
		document.getElementById("s_car").style.display="none";
		document.getElementById("orders").style.display="none";
	}
}
function logout(){
	if(confirm("确定要退出登录吗？")){
		window.open('../php/userQuit.php','_parent','',false);
	}else{
		return false;
	}
}
<?php echo '</script'; ?>
>
</head>

<body onLoad="nav()">
<font face="微软雅黑">
<div  class="navbar navbar-default" class="row" style="background-color:#F8F8FF">
    <div class="col-md-6 col-md-offset-6">
    	<ul class="nav navbar-nav">
            <li><a id="u_logined" href="userInfo.php"></a></li> 
   			<li><a id="home_page" href="mainFace.php">首&nbsp;页</a></li>
 			<li><a id="register" data-toggle="modal" href="#chooseregister">免费注册</a></li>
 			<li><a id="s_login" data-toggle="modal" href="#userlogin" >买家登录</a></li>
 			<li><a id="u_login" data-toggle="modal" href="#sellerlogin" >卖家登录</a></li>
            <li><a id="admin_login" data-toggle="modal" href="#adminlogin">管理员登录</a></li>
 			<li><a id="orders" href="orderList.php">我的订单</a></li>
            <li><a id="s_car" href="shoppingCar.php">购&nbsp;物&nbsp;车</a></li>
            <li><a id="u_quit" href="#" onClick="return logout()">退&nbsp;出</a></li>
		</ul>
	</div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="chooseregister">   <!--注册类型选择模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header" align="center">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">请选择注册类型</h4>
			</div>
            <div class="modal-footer">
            	<div class="row">
                	<div class="col-md-6" align="right">
                    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userregister">用户注册</button>
                    </div>
                    <div class="col-md-6" align="left">
                    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sellerregister">卖家注册</button>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="userregister">     <!--用户注册模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" align="center">用户注册</h4>
			</div>
			<div class="modal-body">
				<form name = "uregister" method = "post" action = "../php/userInSql.php" class="form-horizontal">
       	 			<div class="form-group">
						<div align="right" class="col-md-4"><label for="uname">用户名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "uname"  id="uname" size = "20" onblur="checkName(this.value)"></div>
            			<div class="col-md-2" id="isexist" style="color: #F00"></div>
        			</div>
  					<div class="form-group">
						<div align="right" class="col-md-4"><label for="ulpwd1">登录密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "ulpwd1" id = "ulpwd1" size = "20" onblur="checklPwd(uregister)"></div>
       			 	</div>
        			<div class="form-group">
            			<div align="right" class="col-md-4"><label for="ulpwd2">再次输入登录密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "ulpwd2" id = "ulpwd2" size = "20" onblur="checklPwd(uregister)"/></div>
            			<div class="col-md-2" id="islequal" style="color: #F00"></div>
        			</div>
        			
    				<div class="form-group">
            			<div align="right" class="col-md-4"><label for="utel">移动电话：</label></div>
          			<div class="col-md-6"><input type = "tel" class="form-control" name = "utel" id = "utel" size = "15" onBlur="checkPhone(this.value)"></div>
            			<div class="col-md-2" id="isCoNumber" style="color: #F00"></div>
        			</div>
 					<div class="form-group">
            			<div align="right" class="col-md-4"><label for="uemail">邮箱：</label></div>
            			<div class="col-md-6"><input type = "email" class="form-control" name = "uemail" id = "uemail" size = "30" onBlur="checkEmail(this.value)"></div>
            			<div class="col-md-2" id="isCoEmail" style="color: #F00"></div>
        			</div>
        			<div class="form-group">
						<div align="right" class="col-md-4"><label for="uaddress">地址：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "uaddress"  id="uaddress" size = "50"></div>
        			</div>
        			<div class="form-group">
						<div align="right" class="col-md-4"><label for="utruename">真实姓名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "utruename"  id="utruename" size = "16"></div>
        			</div>
  					<div class="form-group">
        				<div align="right" class="col-md-4"><label for="uquestion">密保问题：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "uquestion" id = "uquestion" size = "30"></div>
        			</div>
  					<div class="form-group">
            			<div align="right" class="col-md-4"><label for="uanswer">密保答案：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "uanswer" id = "uanswer" size = "40"></div>
        			</div >
                    <div class="form-group">
						<div class="col-md-6" align="right"><input type = "reset" class="btn btn-primary" name = "ureset" id = "ureset" value = "重置"></div>
            			<div class="col-md-6 " align="center"><input type = "submit" class="btn btn-primary" name = "usubmit" id = "usubmit" value = "注册" onClick="return checkNull(uregister)"></div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>    

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="sellerregister">       <!--卖家注册模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" align="center">卖家注册</h4>
			</div>
			<div class="modal-body">
				<form name = "sregister" method = "post" action = "../php/sellerInSql.php" class="form-horizontal">
        			<div class="form-group">
						<div align="right" class="col-md-4"><label for="sname">用户名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "sname"  id="sname" size = "20" onblur="checksName(this.value)"></div>
            
           				<div class="col-md-2" id="issexist" style="color: #F00"></div>
        			</div>
  					<div class="form-group">
						<div align="right" class="col-md-4"><label for="spwd1">密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "spwd1" id = "spwd1" size = "20" onblur="checksPwd(sregister)"></div>
        			</div>
        			<div class="form-group">
            			<div align="right" class="col-md-4"><label for="spwd2">再次输入密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "spwd2" id = "spwd2" size = "20" onblur="checksPwd(sregister)"/></div>
            			<div class="col-md-2" id="issequal" style="color: #F00"></div>
        			</div>
    				<div class="form-group">
           	 		<div align="right" class="col-md-4"><label for="stel">移动电话：</label></div>
            			<div class="col-md-6"><input type = "tel" class="form-control" name = "stel" id = "stel" size = "15" onBlur="checksPhone(this.value)"></div>
            			<div class="col-md-2" id="isCosNumber" style="color: #F00"></div>
        			</div>
 					<div class="form-group">
            			<div align="right" class="col-md-4"><label for="semail">邮箱：</label></div>
            			<div class="col-md-6"><input type = "email" class="form-control" name = "semail" id = "semail" size = "30" onBlur="checksEmail(this.value)"></div>
            			<div class="col-md-2" id="isCosEmail" style="color: #F00"></div>
        			</div>
        			<div class="form-group">
						<div align="right" class="col-md-4"><label for="struename">真实姓名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "struename"  id="struename" size = "16"></div>
        			</div>
  					<div class="form-group">
        				<div align="right" class="col-md-4"><label for="squestion">密保问题：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "squestion" id = "squestion" size = "30"></div>
        			</div>
  					<div class="form-group">
           	 			<div align="right" class="col-md-4"><label for="sanswer">密保答案：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "sanswer" id = "sanswer" size = "40"></div>
        			</div >
                    <div class="form-group">
						<div class="col-md-6" align="right"><input type = "reset" class="btn btn-primary" name = "sreset" id = "sreset" value = "重置"></div>
            			<div class="col-md-6" align="center"><input type = "submit" class="btn btn-primary" name = "ssubmit" id = "ssubmit" value = "注册" onClick="return checksNull(sregister)"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="userlogin">   <!--用户登录模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">用户登录</h4>
			</div>
			<div class="modal-body">
				<form name = "ulogin" method = "post" action = "../php/checkUserInfo.php" class="form-horizontal">
        			<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="uname">用户名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "uname"  id="uname" size = "20"></div>
        			</div>
  					<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="upwd">密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "upwd" id = "upwd" size = "20"></div>
        			</div>
                    <div class="form-group">
						<div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" name = "ureset" id = "ureset" value = "重置"></div>
            			<div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "usubmit" id = "usubmit" value = "登录" onclick="return checkUser(ulogin)"></div>
					</div>
                    <div class="form-group" >
                    	<div class="col-md-10" align="right">
							<a href="tpl/findUserPwd.html">忘记密码？</a>
                        </div>
					</div>
                    <input type="text" name="nowpage" value="mainFace.php" style="display:none">
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="sellerlogin">    <!--卖家登录模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">卖家登录</h4>
			</div>
			<div class="modal-body">
				<form name = "slogin" method = "post" action = "../php/checkSellerInfo.php" class="form-horizontal">
        			<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="sname">用户名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "sname"  id="sname" size = "20"></div>
        			</div>
  					<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="spwd">密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "spwd" id = "spwd" size = "20"></div>
        			</div>
                    <div class="form-group">
						<div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" name = "ureset" id = "ureset" value = "重置"></div>
            			<div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "ssubmit" id = "ssubmit" value = "登录" onclick="return checkSeller(slogin)"></div>
					</div>
                    <div class="form-group row">
                    	<div class="col-md-10" align="right">
							<a href="tpl/findSellerPwd.html">忘记密码？</a>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="adminlogin">   <!--管理员登录模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">管理员登录</h4>
			</div>
			<div class="modal-body">
				<form name = "alogin" method = "post" action = "../php/checkAdminInfo.php" class="form-horizontal">
        			<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="aname">用户名：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "aname"  id="aname" size = "20"></div>
        			</div>
  					<div class="form-group row">
						<div align="right" class="col-md-2 col-md-offset-2"><label for="apwd">密码：</label></div>
            			<div class="col-md-6"><input type = "password" class="form-control" name = "apwd" id = "apwd" size = "20"></div>
        			</div>
                    <div class="form-group">
						<div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" name = "areset" id = "areset" value = "重置"></div>
            			<div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "asubmit" id = "asubmit" value = "登录" onclick="return checkAdmin(alogin)"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<br>
<div class="container">
    <div class="row" >
    	<div class="col-md-6 col-md-offset-3">
        	<form role="form" class="form-horizontal" name="search" method="get" action="goodsList.php" >
  				<div class="form-group">
    				<div  class="col-md-9">
      					<input class="form-control input-md" name="searchtext" type="text" placeholder="请输入关键字">
    				</div>
                    <div  class="col-md-2 ">
                        <input class="btn btn-primary btn-md" type="button" value="搜&nbsp;索" onClick="return checkSearchNull(search)">
    				</div>
                </div>
            </form>
    	</div>
    </div>
    <br>
    <div class="row" style="background-color:#F8F8FF">
    	<div class="col-md-6">
    		<ul class="nav nav-pills">
            	<li class="dropdown">
      				<a href="goodsList.php">所有</a>
  				</li>
                <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrayclass']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
  				<li class="dropdown">
                	<a href="goodsList.php?fid=<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][0]['fID'];?>
&tid=0" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][0]['fName'];?>
<span class="caret"></span></a>
      				<ul class="dropdown-menu">
                    <?php
$__section_sec2_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2'] : false;
$__section_sec2_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][1]) ? count($_loop) : max(0, (int) $_loop));
$__section_sec2_1_total = $__section_sec2_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = new Smarty_Variable(array());
if ($__section_sec2_1_total != 0) {
for ($__section_sec2_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] = 0; $__section_sec2_1_iteration <= $__section_sec2_1_total; $__section_sec2_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']++){
?>
          				<li><a href="goodsList.php?tid=<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][1][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['tID'];?>
&fid=<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][0]['fID'];?>
"><?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][1][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['tName'];?>
</a></li>
        			<?php
}
}
if ($__section_sec2_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = $__section_sec2_1_saved;
}
?>
      				</ul>
				</li>
  				<?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
			</ul>
		</div>
	</div>
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <a href="goodsDetails.php?gid=48"><img src="../picture/轮换图片1.png" alt="轮换图片1"></a>
            </div>
            <div class="item">
                <a href="goodsDetails.php?gid=60"><img src="../picture/轮换图片2.png" alt="轮换图片2"></a>
            </div>
            <div class="item">
            	<a href="goodsDetails.php?gid=86"><img src="../picture/轮换图片3.png" alt="轮换图片3"></a>
            </div>
            
		</div>
        	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        	<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
    </div>
    <br><br>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['arrays']->value[1] == 0) {?>
        <div align="center">
            <h1>暂无推荐商品！</h1>
        </div>
        <?php } else { ?>
        <div align="center">
            <h3>【推荐商品】</h3>
            <br>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrays']->value[0], 'item', false, 'key', 'sec1', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="col-md-3" align="center">
                    <a href="goodsDetails.php?gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><img class="thumbnail" src = "../<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
" width="200" height="200" ></a>
                    <h4 align="center" style="color:red">￥<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</h4>
                    <a href="goodsDetails.php?gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><p align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</p></a> 
                    <br><br>
                </div>
                
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <br>
        <div class="row">
            <div class="col-md-6" align="center">
                <p>共有商品&nbsp; <?php echo $_smarty_tpl->tpl_vars['arrays']->value[1];?>
 &nbsp;件&nbsp;&nbsp;
                    第&nbsp;<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['arrays']->value[2];?>
&nbsp;页</p>
            </div>
            <div class="col-md-4 col-md-offest-2">
                <div class="row" align="right">
                    <div class="col-md-3" align="right">
                        <a href="mainFace.php?page=1" >首页</a>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href="mainFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value-1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value-1];?>
">上一页</a>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href="mainFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value+1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value];?>
">下一页</a>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href="mainFace.php?page=<?php echo $_smarty_tpl->tpl_vars['arrays']->value[2];?>
">尾页</a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>


<br><br><br><br>
<div id="footer" style="color:#CCC">
	<div class="container" align="center">
      <div class="col-md-4">
      <h4 align="left">关于我们</h4>
      <p align="left">组员：唐源、陶冲、吴江毅、魏志浩、张博洋</p>
      </div>
      <div class="col-md-4">
      <h4 align="left">联系我们</h4>
      <p align="left">唐同学</p>
      <p align="left">QQ：1035291658</p>
      <p align="left">手机：15680806720</p>
      </div>
      <div class="col-md-4" align="left">
      <h4 >友情链接</h4>
      <a class="color" href="http://www.imooc.com/">慕课网</a>
      <br>
      <a class="color" href="http://www.w3school.com.cn/">W3SCHOOL</a>
      </div>
    </div>
</div>
</font>
</body>
</html><?php }
}
