<?php
/* Smarty version 3.1.30, created on 2016-12-21 23:14:56
  from "C:\AppServ\www\shopping_online\smarty\tpl\orderList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a9c70198fe5_67767997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fcd0efc56630424df9f7be9a3d2d5e33c6c7f2d' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\orderList.html',
      1 => 1482333289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a9c70198fe5_67767997 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>订单列表</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
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

<body>
<font face="微软雅黑">
<div  class="navbar navbar-default" class="row" style="background-color:#F8F8FF">
    <div class="col-md-6 col-md-offset-6">
    	<ul class="nav navbar-nav">
            <li><a id="u_logined" href="userInfo.php"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</a></li>
            <li><a id="home_page" href="mainFace.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
            <li><a id="orders" href="orderList.php">我的订单</a></li>
            <li><a id="s_car" href="shoppingCar.php">购&nbsp;&nbsp;物&nbsp;&nbsp;车</a></li>
             <li><a id="u_quit" href="#" onClick="return logout()">退&nbsp;&nbsp;&nbsp;&nbsp;出</a></li>
        </ul>
    </div>
</div>

<br><br>
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
    		<div class="panel-heading">
            	<div class="row">我的订单列表</div>
            </div>
			<div class="panel-body">
            <?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
            	<h3 align="center" style="color:red">暂无订单！</h3>
            <?php } else { ?>
            	<table class="table table-bordered">
					<thead>
						<tr>
							<th>订单号</th>
							<th>订单金额</th>
                            <th>订单时间</th>
                        	<th>订单状态</th>
						</tr>
					</thead>
					<tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td><a href="orderDetails.php?oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</td>
                            <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value[4] == 1) {?>未提交/<a href="orderDetails.php?oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">去提交</a>/<a href="../php/deleteGoods.php?oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">删除</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value[4] == 2) {?>已支付/<a href="orderDetails.php?oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">查看详情</a>
                            <?php } else { ?>已完成/<a href="orderDetails.php?oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">查看详情</a>
                            <?php }?>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tbody> 
				</table>
            <?php }?>
            </div>
    	</div>
	</div>
</div>
</font>
</body>
</html><?php }
}
