<?php
/* Smarty version 3.1.30, created on 2016-12-21 23:45:38
  from "C:\AppServ\www\shopping_online\smarty\tpl\sellerFace.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585aa3a2d3f1e6_38259462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f85b437c0cd1e7d30b9dd56c366d27b140c7dba' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\sellerFace.html',
      1 => 1482335137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585aa3a2d3f1e6_38259462 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>卖家主页面</title>
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
 src="../js/getSession.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
function checkPrice(str){
	var price = /(^[1-9][0-9]*\.[0-9]{0,2}$)|(^[1-9][0-9]*)|(^0\.[0-9]{0,2}$)/;
	if(str != ""){
		if(!price.test(str)){
			document.getElementById("isrprice").innerHTML="价格格式错误";
			form.gprice.focus();
			return false;
		}else{
			document.getElementById("isrprice").innerHTML="价格格式正确";
			return true;
		}
	}
}
function checkStock(str){
	var price = /^[1-9][0-9]*$/;
	if(str != ""){
		if(!price.test(str)){
			document.getElementById("isrstock").innerHTML="库存量格式错误";
			form.gprice.focus();
			return false;
		}else{
			document.getElementById("isrstock").innerHTML="库存量格式正确";
			return true;
		}
	}
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
function checkPicture(str){
	var price = /\.(gif|jpg|jpeg|bmp|png)$/;
	if(str != ""){
		if(!price.test(str)){
			document.getElementById("isrpicture").innerHTML="图片格式错误";
			return false;
		}else{
			document.getElementById("isrpicture").innerHTML="图片格式正确";
			return true;
		}
	}
}

function checkNull(form){
	var myselect = document.getElementById("cata");
	var index = myselect.selectedIndex;
	var id = myselect.options[index].value;
	if(form.gname.value == ""){
		alert('商品名不能为空！');
		form.gname.focus();
		return false;
	}else if(form.gprice.value == ""){
		alert('单价不能为空！');
		form.gprice.focus();
		return false;
	}else if(id == 0 || (id != 0 && myselect.options[document.getElementById(id).selectedIndex].value == 0)){
		alert('请选择商品类别！');
		return false;
	}else if(form.gpicture.value == ""){
		alert('请选择商品图片！');
		return false;
	}else{
		form.submit();
	}
}

function Choice(){
	var myselect = document.getElementById("cata");
	var index = myselect.selectedIndex;
	var id = myselect.options[index].value;
	for(var i = 1 ; i < myselect.length ; i++){
		if(i == id){
			document.getElementById(i).style.display="block";
		}else{
			document.getElementById(i).style.display="none";
		}
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
	xmlhttp.open("GET","../php/checkSellerTrueName.php?truename="+name,true);
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
	xmlhttp.open("GET","../php/checkSellerAnswer.php?answer="+answer,true);
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

function checkStock(input){
	var num=/(^[1-9][0-9]*$)|(^-[1-9][0-9]*$)/;
	var str=input.value;
	if(str==''){
		alert('输入框不能为空！');
		input.focus();
		return false;
	}else if(!num.test(str)){
		alert('输入格式有误！');
		input.focus();
		return false;
	}else{
		return true;
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
            <li><a id="s_logined" href="sellerFace.php"><?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
</a></li> 
            <li><a id="s_quit" href="#" onClick="return logout()">退&nbsp;出</a></li>
		</ul>
	</div>
</div>
<br><br><br>

<div class="container">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
    	<li><a href="#goodsuploaded" role="tab" data-toggle="tab">已上传商品</a></li>
    	<li><a href="#uploadgoods" role="tab" data-toggle="tab">商品上传</a></li>
        <li><a href="#forder" role="tab" data-toggle="tab">未处理订单</a></li>
        <li><a href="#dealed" role="tab" data-toggle="tab">已处理订单</a></li>
        <li><a href="#unforder" role="tab" data-toggle="tab">已完成订单</a></li>
        <li><a href="#checkinfo" role="tab" data-toggle="tab">个人资料</a></li>
    	<li><a href="#modifypwd" role="tab" data-toggle="tab">修改密码</a></li>
	</ul>

	<div id="myTabContent" class="tab-content">
    <br><br><br>
		<div class="tab-pane fade" id="goodsuploaded">
      	<?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>       	
    		<div align="center">
    			<h1>暂无已上传商品！</h1>
    		</div>
    	<?php } else { ?>
			<div class="row">
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'item', false, 'key', 'sec1', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    			<div class="col-md-3" align="center">
        			<a data-toggle="modal" href="#gdetails<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><img src = "../<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
" width="200" height="200" ></a>
                	<a data-toggle="modal" href="#gdetails<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><p align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</p></a>
           	 	</div>
                <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="gdetails<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">   <!--商品详情模态框-->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">商品详情</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                	<div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="../<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
" height="350px" width="350px">
                                        </a>
                                        <div class="media-body">
                                            <div class="col-md-offset-3">
                                                <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</h4>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-offset-3">价格：<font size="+2" color="#FF0000">¥<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</font></div>
                                            </div>
                                            <br>
                                                
                                            <div class="row">
                                            	<div class="col-md-offset-3">库存：<?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
件</font></div>
                                            </div>
                                            <br>
                                            
                                            <div class="row">
                                            	<div class="col-md-offset-3"><?php if ($_smarty_tpl->tpl_vars['item']->value[8] == 0) {?> 未推荐  <?php } else { ?>  已推荐  <?php }?></font></div>
                                            </div>
                                            <br>
                                            
                                            <div class="row" align="center">
                                                <a href="sellerFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&delete=1&gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&gpicture=<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
&tid=$item[3]">删除</a>
                                            </div>
                                            <br>
                                            <form method="post" action="../php/addStock.php">
                                            	<div class="row" align="center">
                                                	<div class="col-md-6 col-md-offset-3">
                                                		<input type="number" class="form-control" name="addstock" id="addstock">
                                      				</div>
                                                </div>
                                                <br>
                                                <input type="text" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" style="display:none">
                                                <div class="row" align="center">
                                                	<input type="submit" class="btn btn-primary" name="substock" value="添加库存" onClick="return checkStock(addstock)">
                                            	</div>
                                            </form>  
                                        </div>
                                    </div>
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
    		<br>
    		<div class="row">
        		<div class="col-md-6" align="center">
        			<p>共有商品&nbsp; <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 &nbsp;件&nbsp;&nbsp;
            			第&nbsp;<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
&nbsp;页</p>
        		</div>
				<div class="col-md-4 col-md-offest-2">
            		<div class="row" align="right">
            			<div class="col-md-3" align="right">
                			<a href="sellerFace.php?page=" >首页</a>
            			</div>
            			<div class="col-md-3" align="right">
               				<a href="sellerFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value-1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value-1];?>
">上一页</a>
            			</div>
            			<div class="col-md-3" align="right">
                			<a href="sellerFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value+1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value];?>
">下一页</a>
            			</div>
            			<div class="col-md-3" align="right">
               				<a href="sellerFace.php?page=<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
">尾页</a>
            			</div>
					</div>
    			</div>
    		</div>
    	<?php }?>
        </div> 
		<div class="tab-pane fade" id="uploadgoods">
        	<br><br>
        	<form name = "upload" method = "post" action = "../php/goodInSql.php" class="form-horizontal"  enctype="multipart/form-data">
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="gname">商品名：</label></div>
                    <div class="col-md-3"><input type = "text" class="form-control" name = "gname"  id="gname" size = "20"></div>
                </div>
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="gprice">单价：</label></div>
                    <div class="col-md-3"><input class="form-control" type="text" name="gprice" id="gprice" size="20" onBlur="return checkPrice(this.value)"></div>
                    <div class="col-md-3" id = "isrprice" style="color:red"></div>
                </div>
                
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label >商品类别：</label></div>
                    <div class="col-md-3"> 
                        <div class="col-md-6">
                        
                            <select class="form-control" name="cata" id="cata" onChange="Choice()">
                            	<option value="0" selected>未选择</option>
                            <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrayclass']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][0]['fID'];?>
" ><?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][0]['fName'];?>
</option>   
                            <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>            
                            </select>
                        
                        </div>
                        <div class="col-md-6">
                        <?php
$__section_sec2_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2'] : false;
$__section_sec2_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrayclass']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec2_1_total = $__section_sec2_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = new Smarty_Variable(array());
if ($__section_sec2_1_total != 0) {
for ($__section_sec2_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] = 0; $__section_sec2_1_iteration <= $__section_sec2_1_total; $__section_sec2_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']++){
?>
                            <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)][0]['fID'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)][0]['fID'];?>
" style="display:none">
                            	<option value="0" selected>未选择</option>
                            <?php
$__section_sec3_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec3']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec3'] : false;
$__section_sec3_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)][1]) ? count($_loop) : max(0, (int) $_loop));
$__section_sec3_2_total = $__section_sec3_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec3'] = new Smarty_Variable(array());
if ($__section_sec3_2_total != 0) {
for ($__section_sec3_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index'] = 0; $__section_sec3_2_iteration <= $__section_sec3_2_total; $__section_sec3_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index']++){
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)][1][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index'] : null)]['tID'];?>
" ><?php echo $_smarty_tpl->tpl_vars['arrayclass']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)][1][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec3']->value['index'] : null)]['tName'];?>
</option>
                            <?php
}
}
if ($__section_sec3_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec3'] = $__section_sec3_2_saved;
}
?>
                            </select>
                        <?php
}
}
if ($__section_sec2_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = $__section_sec2_1_saved;
}
?>
                        </div>
                    </div>
                </div>
               	<div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="gstock">商品库存：</label></div>
                    <div class="col-md-3"><input class="form-control" type = "text"  name = "gstock"  id="gstock" size = "20" ></div>
                    <div class="col-md-3" id="isrstock" style="color:red"></div>
                </div>
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="gpicture">商品图片：</label></div>
                    <div class="col-md-3"><input type = "file"  name = "gpicture"  id="gpicture" size = "20" maxlength="1000"  onchange="checkPicture(this.value)"></div>
                    <div class="col-md-3" id="isrpicture" style="color:red"></div>
                </div>
                
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="gintro">商品介绍：</label></div>
                    <div class="col-md-3"><textarea class="form-control" name="gintro" cols="28" rows="4" id="gintro"></textarea></div>
                </div>
        
                
                <div class="form-group">
                    <div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" name = "greset" id = "greset" value = "重置"></div>
                    <div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "gsubmit" id = "gsubmit" value = "提交" onClick="return checkNull(upload)"></div>
                </div>
            </form>
        </div>
        
        <div class="tab-pane fade" id="forder" align="center" >
        <?php if ($_smarty_tpl->tpl_vars['total0']->value == 0) {?>
        	<h2 align="center" style="color:red">您暂无未处理的订单！</h2>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        	<h5>买家名：<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</h5><br>
            <h5>商品名：<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</h5><br>
            <h5>商品数量：<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</h5><br>
            <h5>商品尺寸：<?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</h5><br>
            <h5>订单时间：<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</h5><br>
            <h5>收货地址：<?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</h5><br>
            <h5>收货电话：<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
</h5><br>
            <h5>状态：未发货</h5><br>
            <form name="delivergoods" action="../php/dealOrder.php" method="post" >
            	<input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
" style="display:none">
            	<input type="text" name="supid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
" style="display:none">
            	<input class="btn btn-danger" type="submit" name="deliver" value="提醒他我已发货">
            </form>
            ——————————————————————————————————————————————————————————————————————————————————————
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
        </div>
        
        <div class="tab-pane fade" id="dealed" align="center">
        <?php if ($_smarty_tpl->tpl_vars['total1']->value == 0) {?>
        	<h2 align="center" style="color:red">暂无订单！</h2>
        <?php } else { ?>
        	
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderarr1']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        	<h5>买家名：<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</h5><br>
            <h5>商品名：<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</h5><br>
            <h5>商品数量：<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</h5><br>
            <h5>商品尺寸：<?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</h5><br>
            <h5>订单时间：<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</h5><br>
            <h5>收货地址：<?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</h5><br>
            <h5>收货电话：<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
</h5><br>
           	<h5>状态：已发货</h5><br>
            ——————————————————————————————————————————————————————————————————————————————————————
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        <?php }?>
        </div>
        
        <div class="tab-pane fade" id="unforder" align="center">
        <?php if ($_smarty_tpl->tpl_vars['total2']->value == 0) {?>
        	<h2 align="center" style="color:red">您暂无已完成订单！</h2>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderarr2']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        	<h5>买家名：<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</h5><br>
            <h5>商品名：<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</h5><br>
            <h5>商品数量：<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</h5><br>
            <h5>商品尺寸：<?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</h5><br>
            <h5>订单时间：<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</h5><br>
            <h5>收货地址：<?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</h5><br>
        	<h5>收货电话：<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
</h5><br>
            <h5>状态：已收货</h5><br>
            ——————————————————————————————————————————————————————————————————————————————————————
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        <?php }?>
        </div>
        
        <div class="tab-pane fade" id="checkinfo" align="left">
       		<font face="微软雅黑">
                <h4><strong>用户名：</strong><?php echo $_smarty_tpl->tpl_vars['sellerinfo']->value[1];?>
</h4>
                <h4><strong>电话：</strong><?php echo $_smarty_tpl->tpl_vars['sellerinfo']->value[4];?>
&nbsp;&nbsp;<a data-toggle="modal" href="#modtel" >修改</a></h4>
                <h4><strong>邮箱：</strong><?php echo $_smarty_tpl->tpl_vars['sellerinfo']->value[5];?>
&nbsp;&nbsp;<a data-toggle="modal" href="#modemail" >修改</a></h4>
            </font>
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
        		<div class="col-md-4"><h4><?php echo $_smarty_tpl->tpl_vars['sellerinfo']->value[6];?>
</h4></div>
            </div>
            <div class="row" id = "answerinfo" style="display:none">
            	<div class="col-md-3 col-md-offset-2" align="right"><h4>请输入密保答案：</h4></div>
        		<div class="col-md-4"><input type = "text" class="form-control" name = "answer"  id="answer" size = "20"/></div>
                <div class="col-md-1"><button class="btn btn-primary" name="upanswer" id="upanswer" onClick="checkAnswer()"><span class="glyphicon glyphicon-arrow-right"></span></button></div>
            </div>
            <form method="post" name="npassword" action="../php/modifySellerPwd.php"> 
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
        </div>
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
            	<form name="form1" method="post" action="../php/modifySellerInfo.php">
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
            	<form name="form2" method="post" action="../php/modifySellerInfo.php">
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
</div>
</font>
<br><br><br><br><br><br><br><br><br>
<font face="微软雅黑">
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
	$('#myTab a[href="#<?php echo $_smarty_tpl->tpl_vars['dispID']->value;?>
"]').tab('show');
});
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
