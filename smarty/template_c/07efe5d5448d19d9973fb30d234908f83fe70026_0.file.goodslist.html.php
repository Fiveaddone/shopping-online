<?php
/* Smarty version 3.1.30, created on 2016-12-07 10:56:37
  from "C:\AppServ\www\shopping_online\smarty\tpl\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58477a659ed1a6_90467786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07efe5d5448d19d9973fb30d234908f83fe70026' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\goodslist.html',
      1 => 1481079396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58477a659ed1a6_90467786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>商品详情<?php echo $_smarty_tpl->tpl_vars['arrs']->value[3];?>
</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../js/getSession.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
</head>
<body onLoad="nav()">
<div class="container">
	<div class="row" style="background-color:#F8F8FF">
    	<div class="col-md-6 col-md-offset-6">
    		<ul class="nav nav-tabs">
            	<li><a id="u_logined" href="##"></a></li>
               
   				<li><a id="home_page" href="mainFace.html">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
 				<li><a id="register" href="##">免费注册</a></li>
 				<li><a id="s_login" href="userLogin.html">买家登录</a></li>
 				<li><a id="u_login" href="sellerLogin.html">卖家登录</a></li>
 				<li><a id="orders" href="##">我的订单</a></li>
                <li><a id="s_car" href="shoppingCar.html">购&nbsp;&nbsp;物&nbsp;&nbsp;车</a></li>
                <li><a id="u_quit" href="../php/userQuit.php">退&nbsp;&nbsp;&nbsp;&nbsp;出</a></li>
			</ul>
		</div>
	</div>
    <br><br>
	<div class="row" >
		<div class="col-md-6 col-md-offset-3">
        	<form role="form" class="form-horizontal">
  				<div class="form-group">
    				<div  class="col-md-9">
      					<input class="form-control input-lg" type="text" placeholder="请输入关键字">
    				</div>
                    <div  class="col-md-2 col-md-offset-1">
                        <button class="btn btn-primary btn-lg" type="button">搜&nbsp;&nbsp;&nbsp;&nbsp;索</button> 
    				</div>
                </div>
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
    	
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value[2], 'item', false, 'key', 'sec1', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    		<div class="col-md-2">
        		<img src = "../<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" width="200" height="200">
                <h3>和<?php echo $_smarty_tpl->tpl_vars['arrs']->value[1]['key'];?>
和</h3>
            </div>
            <div class="col-md-1">
        	
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    	<div class="row">
        	
    	</div>
    </div>
</div>
</body>
</html>
<?php }
}
