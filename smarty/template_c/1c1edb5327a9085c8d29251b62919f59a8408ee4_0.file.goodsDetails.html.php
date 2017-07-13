<?php
/* Smarty version 3.1.30, created on 2016-12-22 12:25:39
  from "C:\AppServ\www\shopping_online\smarty\tpl\goodsDetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585b55c327b493_16528390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1edb5327a9085c8d29251b62919f59a8408ee4' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\goodsDetails.html',
      1 => 1482380720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585b55c327b493_16528390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>商品详情</title>
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet"><!---->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/bootstrap-spinner.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../bootstrap/jquery.spinner.min.js"><?php echo '</script'; ?>
>
<style>
.nav
 > li:hover .dropdown-menu {
	 display: block;
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

   
function nav(){
	var type = getSession("type");
	var uname = getSession("name");
	if(type == 'user'){
		document.getElementById("register").style.display="none";
		document.getElementById("s_login").style.display="none";
		document.getElementById("u_login").style.display="none";
		document.getElementById("u_logined").innerHTML=uname;
	}else{
		document.getElementById("u_quit").style.display="none";
		document.getElementById("u_logined").style.display="none";
		document.getElementById("s_car").style.display="none";
		document.getElementById("orders").style.display="none";
	}
}

function keyPress() {    
	var keyCode = event.keyCode;    
	if ((keyCode >= 48 && keyCode <= 57)){    
         event.returnValue = true;    
	} else {    
           event.returnValue = false;    
	}    
} 

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

function logout(){
	if(confirm("确定要退出登录吗？")){
		window.open('../php/userQuit.php','_parent','',false);
	}else{
		return false;
	}
}

function checkGinfo(form){
	var type = getSession("type");
	var uname = getSession("name");
	if(type != 'user'){
		alert('请登录后再进行操作！');
		return false;
	}else if(form.size.value == ""){
		alert('请选择尺寸！');
		return false;
	}else{
		form.submit();
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
                    <div class="form-group row">
                    	<div class="col-md-10" align="right">
							<a href="tpl/findUserPwd.html">忘记密码？</a>
                        </div>
					</div>
                    <input type="text" name="nowpage" value="goodsDetails.php?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&gid=<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
" style="display:none">
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

<br>
<div class="container">
    
    <font size="-2">
    	<ol class="breadcrumb">
			<li><a href="goodsList.php?fid=0&fname=0&tname=0&tid=0">所有商品</a></li>
            <?php if ($_smarty_tpl->tpl_vars['fname']->value != "0") {?>
				<li><a href="goodsList.php?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
&fname=<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
&tname=0&tid=0"><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</a></li>
            	<?php if ($_smarty_tpl->tpl_vars['tname']->value != "0") {?>
					<li><a href="goodsList.php?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
&fname=<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
</a></li>
            	<?php }?>
        	<?php }?> 
		</ol>
	</font>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<div class="media">
    			<a class="pull-left" href="#">
    				<img class="media-object thumbnail" src="../<?php echo $_smarty_tpl->tpl_vars['arr']->value[7];?>
" height="350px" width="350px">
  				</a>
  				<div class="media-body">
                	<div class="col-md-offset-3" align="center">
                    	<br><br>
                    	<h3 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
</h3>
                    </div>
                    <br>
    				<div class="row" align="center">
                    	<div class="col-md-offset-3">售价：<font size="+2" color="#FF0000">¥<?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
</font></div>
                    </div>
                    <br>
                    <form class="form-horizontal" name = "purdetails" method = "post" action = "../php/purchaseGoods.php">
                        <div class="row">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[3];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 24) {?>
                        	<div class="col-md-offset-2" align="center">
                        		选择尺寸：
                            	<input name="size" type="radio" value="34">34&nbsp;
                            	<input name="size" type="radio" value="35">35&nbsp;
                            	<input name="size" type="radio" value="36">36&nbsp;
                            	<input name="size" type="radio" value="37">37&nbsp;
                            	<input name="size" type="radio" value="38">38&nbsp;
                            	<input name="size" type="radio" value="39">39&nbsp;
                                <input name="size" type="radio" value="40">40
                            </div>
                        <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[3];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 14) {?>
                        	<div class="col-md-offset-2" align="center">
                        		选择尺寸：
                            	<input name="size" type="radio" value="39">39&nbsp;
                            	<input name="size" type="radio" value="40">40&nbsp;
                            	<input name="size" type="radio" value="41">41&nbsp;
                            	<input name="size" type="radio" value="42">42&nbsp;
                            	<input name="size" type="radio" value="43">43&nbsp;
                            	<input name="size" type="radio" value="44">44
                            </div>
                        <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[4];
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[4];
$_prefixVariable4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[4];
$_prefixVariable5=ob_get_clean();
if (($_prefixVariable3 == 1) || ($_prefixVariable4 == 2) || ($_prefixVariable5 == 3)) {?>
                        	<div class="col-md-offset-2" align="center">
                        		选择尺寸：
                            	<input name="size" type="radio" value="S">S&nbsp;
                            	<input name="size" type="radio" value="M">M&nbsp;
                            	<input name="size" type="radio" value="L">L&nbsp;
                            	<input name="size" type="radio" value="XL">XL&nbsp;
                            	<input name="size" type="radio" value="2XL">2XL&nbsp;
                            	<input name="size" type="radio" value="3XL">3XL&nbsp;
                            </div>
                        <?php } else { ?>
                        	<div class="col-md-offset-2" align="center">
                        		选择尺寸：
                            	<input name="size" type="radio" value="小">小&nbsp;
                                <input name="size" type="radio" value="中">中&nbsp;
                                <input name="size" type="radio" value="大">大&nbsp;
                            </div>
                        <?php }}}?>
                        </div>
                        <br>
                        <div class="row" align="center">
                            <div class="col-md-3 col-md-offset-2" align="right">
                            	数量：                            
                            </div>
                            <div class="col-md-3">
                            	<div class="row">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <input type="text" class="form-control" name="puramount" id="puramount" value="1" data-max="<?php echo $_smarty_tpl->tpl_vars['arr']->value[9];?>
" data-min="1" data-step="1" >
                                        <div class="input-group-addon">
                                          	<a href="javascript:;" class="spin-up" data-spin="up"><i class="icon-sort-up"></i></a>
                                          	<a href="javascript:;" class="spin-down" data-spin="down"><i class="icon-sort-down"></i></a>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                            <div class="col-md-4">
                                库存：<?php echo $_smarty_tpl->tpl_vars['arr']->value[9];?>
件
                            </div>
                        </div>
                        <br>
                        <div class="row" align="center">
                            <div class="col-md-4 col-md-offset-3" >
                            	<input type="submit" class="btn btn-danger" <?php if ($_smarty_tpl->tpl_vars['arr']->value[9] > 0) {
} else { ?>disabled="disabled"<?php }?> name="action" value = "加入购物车" onclick="return checkGinfo(purdetails)">
                            </div>
                            <div class="col-md-4" >
                                <input type="submit" class="btn btn-primary" <?php if ($_smarty_tpl->tpl_vars['arr']->value[9] > 0) {
} else { ?>disabled="disabled"<?php }?> name="action"  value = "现在购买" onclick="return checkGinfo(purdetails)">
                            </div>
                        </div>
                        <input type="text" name="gid" style="display:none" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
"/>
                    <form>
  				</div>
			</div>
    	</div>
    </div>


	<ul id="myTab" class="nav nav-tabs" role="tablist">
    	<li class="active"><a href="#gintro" role="tab" data-toggle="tab">商品详情</a></li>
    	<li><a href="#geval" role="tab" data-toggle="tab">商品评价</a></li>
	</ul>

	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="gintro">
        	<div class="panel panel-warning">
                <div class="panel-body">
                    <h4><?php echo $_smarty_tpl->tpl_vars['arr']->value[6];?>
</h4>
                </div>
            </div>
        
        </div>
		<div class="tab-pane fade" id="geval">
        <?php if ($_smarty_tpl->tpl_vars['evalnum']->value == 0) {?>
        	<h4>暂无评价</h4>
        <?php } else { ?>
            <div class="panel panel-info">
            
                <div class="panel-heading">
                    评论条数：<?php echo $_smarty_tpl->tpl_vars['evalnum']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    平均分：<?php echo $_smarty_tpl->tpl_vars['score']->value;?>

                </div>
                <div class="panel-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evalarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="well">
                        <div class="media">
                            <h4 class="pull-left" style="color:#0C6">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>

                            </h4>
                            <div class="media-body">
                            	<div class="row">
                                	<div class="col-md-offset-1"
                                		<p>分数：<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
</p>
                                		<p>评价详情：<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</p>
                                		<p>评价时间：<?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
                </div>
            </div>
        <?php }?>	
        </div>
	</div>
</div>

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
<?php echo '<script'; ?>
>

$(function () {
	$('#myTab a[href="#gintro"]').tab('show');
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
