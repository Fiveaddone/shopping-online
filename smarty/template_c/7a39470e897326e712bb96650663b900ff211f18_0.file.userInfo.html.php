<?php
/* Smarty version 3.1.30, created on 2016-12-21 13:58:23
  from "C:\AppServ\www\shopping_online\smarty\tpl\userInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a19ffaea3b2_19355702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a39470e897326e712bb96650663b900ff211f18' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\userInfo.html',
      1 => 1482299892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a19ffaea3b2_19355702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>买家资料页面</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<style>
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
 .color{
	color:#CCC; text-decoration:none;
}
.color:hover{
	color:#CF0000; text-decoration:underline;
}
</style>



<?php echo '<script'; ?>
>
function checkTel(str){
	var str1 = /^1(3|4|5|7|8)\d{9}$/;
	
	if(str.value == ''){
		alert('输入框不能为空');
		str.focus();
		return false;
	}else if(!(str1.test(str.value))){
		alert('手机号格式不对！');
		str.focus();
		return false;
	}else{
		return true;
	}
}

function checkEmail(str){
	var str1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(str.value == ''){
		alert('输入框不能为空');
		str.focus();
		return false;
	}else if(!(str1.test(str.value))){
		alert('邮箱格式不对！');
		str.focus();
		return false;
	}else{
		return true;
	}
}
function checkAdd(str){
	
	if(str.value == ''){
		alert('输入框不能为空');
		str.focus();
		return false;
	}else{
		return true;
	}
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function () {
	$('#myTab a[href="#checkinfo"]').tab('show');
});

function logout(){
	if(confirm("确定要退出登录吗？")){
		window.open('../php/userQuit.php','_parent','',false);
	}else{
		return false;
	}
}

function checkTrueName(){
	var name = document.getElementById("truename").value;
	var xmlhttp;
	if (window.XMLHttpRequest){
  		xmlhttp=new XMLHttpRequest();
  	}else{
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
	xmlhttp.onreadystatechange=function(){
 		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText == 0){
				alert('真实姓名错误！');
			}else{
				document.getElementById("truenameinfo").style.display="none";
				document.getElementById("questioninfo").style.display="block";
				document.getElementById("answerinfo").style.display="block";
			}
    	}
  	}
	xmlhttp.open("GET","../php/checkUserTrueName.php?truename="+name,true);
	xmlhttp.send();
}

function checkAnswer(){
	var answer = document.getElementById("answer").value;
	var xmlhttp;
	if (window.XMLHttpRequest){
  		xmlhttp=new XMLHttpRequest();
  	}else{
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
	xmlhttp.onreadystatechange=function(){
 		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText == 0){
				alert('答案错误！');
			}else{
				document.getElementById("pwd1info").style.display="block";
				document.getElementById("pwd2info").style.display="block";
				document.getElementById("uppwd").style.display="block";
				document.getElementById("questioninfo").style.display="none";
				document.getElementById("answerinfo").style.display="none";
			}
    	}
  	}
	xmlhttp.open("GET","../php/checkUserAnswer.php?answer="+answer,true);
	xmlhttp.send();
}

function checkPwd(form){ 
	if(form.pwd1.value != "" && form.pwd2.value != ""){
		if(form.pwd1.value.length < 6 || form.pwd2.value.length < 6){
			document.getElementById("isequal").innerHTML="密码长度不能低于6位！";
			return false;
		}else if(form.pwd1.value == form.pwd2.value){
			
			return true;
		}else{
			document.getElementById("isequal").innerHTML="密码不一致！";
			return false
		}
	}else{
		alert("请输入密码！");
		return false;
	}
}
<?php echo '</script'; ?>
>
</head>

<body>
<font face="微软雅黑">
<div  class="navbar navbar-default" class="row" style="background-color:#F8F8FF">
    <div class="col-md-6 col-md-offset-6">
    	<ul class="nav navbar-nav">
            <li><a  href="userInfo.php"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</a></li> 
            <li><a  href="mainFace.php">首页</a></li> 
            <li><a  href="orderList.php">我的订单</a></li> 
            <li><a  href="shoppingCar.php">购物车</a></li> 
            <li><a  href="#" onClick="return logout()">退&nbsp;&nbsp;&nbsp;&nbsp;出</a></li>
		</ul>
	</div>
</div>
<div class="container">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
    	<li><a href="#checkinfo" role="tab" data-toggle="tab">个人资料</a></li>
    	<li><a href="#modifypwd" role="tab" data-toggle="tab">修改密码</a></li>
	</ul>

	<div id="myTabContent" class="tab-content">
    <br><br><br><br>
		<div class="tab-pane fade" id="checkinfo" align="left">
      		<h4><strong>用户名：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[1];?>
</h4>
            <h4><strong>电话：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[4];?>
&nbsp;&nbsp;<a data-toggle="modal" href="#modtel" >修改</a></h4>
            <h4><strong>邮箱：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[5];?>
&nbsp;&nbsp;<a data-toggle="modal" href="#modemail" >修改</a></h4>
            <h4><strong>地址：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[6];?>
&nbsp;&nbsp;<a data-toggle="modal" href="#modadd" >修改</a></h4>
        </div> 
		<div class="tab-pane fade" id="modifypwd">
        	<div class="row" id = "truenameinfo">
            	<div class="col-md-3 col-md-offset-2" align="right"><h4>请输入您的真实姓名：</h4></div>
        		<div class="col-md-4">
                	<input type = "text" class="form-control" name = "truename"  id="truename" size = "20"/>
                </div>
                <div class="col-md-1"><button class="btn btn-primary" name="upname" id="upname" onClick="checkTrueName()"><span class="glyphicon glyphicon-arrow-right"></span></button></div>
            </div>
            <div class="row" id = "questioninfo" style="display:none">
            	<div class="col-md-3 col-md-offset-2" align="right"><h4>密保问题：</h4></div>
        		<div class="col-md-4"><h4><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[7];?>
</h4></div>
                
            </div>
            <div class="row" id = "answerinfo" style="display:none">
            	<div class="col-md-3 col-md-offset-2" align="right"><h4>请输入密保答案：</h4></div>
        		<div class="col-md-4"><input type = "text" class="form-control" name = "answer"  id="answer" size = "20"/></div>
                <div class="col-md-1"><button class="btn btn-primary" name="upanswer" id="upanswer" onClick="checkAnswer()"><span class="glyphicon glyphicon-arrow-right"></span></button></div>
            </div>
            <form method="post" name="npassword" action="../php/modifyUserPwd.php"> 
                <div class="row" id = "pwd1info" style="display:none">
                    <div class="col-md-3 col-md-offset-2" align="right"><h4>请输入新密码：</h4></div>
                    <div class="col-md-4"><input type = "password" class="form-control" name = "pwd1"  id="pwd1" size = "20" /></div>
                </div><br>
                <div class="row" id = "pwd2info" style="display:none">
                    <div class="col-md-3 col-md-offset-2" align="right"><h4>再次输入新密码：</h4></div>
                    <div class="col-md-4"><input type = "password" class="form-control" name = "pwd2"  id="pwd2" size = "20" /></div>
                    <div class="col-md-3" id="isequal" style="color:red"></div>
                </div>
                <div class="row" id = "uppwd" style="display:none">
                    <div class="col-md-6" align="right"><input type = "reset" class="btn btn-primary" name = "reset" id = "reset" value = "重置"></div>
            		<div class="col-md-6 " ><input type = "submit" class="btn btn-primary" name = "usubmit" id = "usubmit" value = "提交" onClick="return checkPwd(npassword)"></div>
                </div>
            </form>
        </div><br><br><br>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="modtel">   <!--修改电话模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">电话修改</h4>
			</div>
			<div class="modal-body">
            	<form name="form1" method="post" action="../php/modifyUserInfo.php">
        			<div class="form-group row">
						<div align="right" class="col-md-3"><label for="tel">请输入新手机号：</label></div>
            			<div class="col-md-6"><input type = "tel" class="form-control" name = "tel"  id="tel" size = "20"></div>
                        <div class="col-md-2" align="right"><input type = "submit" class="btn btn-primary" name="subnewtel" value = "修改" onClick="return checkTel(tel)"></div>
        			</div>
                </form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="modemail">   <!--修改电话模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">邮箱修改</h4>
			</div>
			<div class="modal-body">
            	<form name="form2" method="post" action="../php/modifyUserInfo.php">
        			<div class="form-group row">
						<div align="right" class="col-md-3"><label for="email">请输入新邮箱：</label></div>
            			<div class="col-md-6"><input type = "email" class="form-control" name = "email"  id="email" size = "20"></div>
                        <div class="col-md-2" align="right"><input type = "submit" class="btn btn-primary" name="subnewemail" value = "修改" onClick="return checkEmail(email)"></div>
        			</div>
                </form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="modadd">   <!--修改电话模态框-->
    <div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">地址修改</h4>
			</div>
			<div class="modal-body">
        		<form name="form3" method="post" action="../php/modifyUserInfo.php">
                	<div class="form-group row">
						<div align="right" class="col-md-3"><label for="address">请输入新地址：</label></div>
            			<div class="col-md-6"><input type = "text" class="form-control" name = "address"  id="address" size = "20"></div>
                        <div class="col-md-2" align="right"><input type = "submit" class="btn btn-primary" name="subnewadd" value = "修改" onClick="return checkAdd(address)"></div>
        			</div>
                </form>
			</div>
		</div>
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
