<?php
/* Smarty version 3.1.30, created on 2016-12-22 12:35:36
  from "C:\AppServ\www\shopping_online\smarty\tpl\orderDetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585b58189a9c60_76708734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a818919b987d3d13ce635dfb753eacf771860519' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\orderDetails.html',
      1 => 1482381334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585b58189a9c60_76708734 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>订单详情</title>
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

function  chooseStar(num){
	document.getElementById("score").setAttribute("value",num);
	for(var i=1;i<=5;i++){
		if(i<=num)
    		document.getElementById(i).setAttribute("class","glyphicon glyphicon-star");
		else
			document.getElementById(i).setAttribute("class","glyphicon glyphicon-star-empty");
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
            	<div class="row">
            		<div class="col-md-6">确认您的订单（订单号<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][0];?>
）</div>
                	<div class="col-md-6" align="right">订单时间：<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][3];?>
</div>
                </div>
            </div>
			<div class="panel-body">
            	<table class="table table-bordered">
					<thead>
						<tr>
							<th>商品名称</th>
							<th>数&nbsp;&nbsp;&nbsp;&nbsp;量</th>
                            <th>尺&nbsp;&nbsp;&nbsp;&nbsp;寸</th>
                        	<th>小&nbsp;&nbsp;计（元）</th>
                    		<th>操作</th>
						</tr>
					</thead>
					<tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td><a href="goodsDetails.php?gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[11];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[12];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[13];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[12]*$_smarty_tpl->tpl_vars['item']->value[8];?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value[14] == 1) {?>
                            <td><a href="../php/dealOrder.php?supid=<?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
&oid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">确认收货</a></td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value[14] == 2) {?>
                            <td><a data-toggle="modal" href="#evaluation">评价商品</a></td>
                            
                            <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="evaluation">   <!--商品评价模态框-->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">请输入您的评价</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name = "alogin" method = "post" action = "../php/evalInSql.php" class="form-horizontal">
                                               	<div class="form-group row">
                                                    <div align="right" class="col-md-2 col-md-offset-2"><label >评价星级:</label></div>
                                                    <div class="col-md-6">
                                                    	<span class="glyphicon glyphicon-star-empty" id="1" name="1" onClick="chooseStar(1)"></span>
                                                        <span class="glyphicon glyphicon-star-empty" id="2" name="2" onClick="chooseStar(2)"></span>
                                                        <span class="glyphicon glyphicon-star-empty" id="3" name="3" onClick="chooseStar(3)"></span>
                                                        <span class="glyphicon glyphicon-star-empty" id="4" name="4" onClick="chooseStar(4)"></span>
                                                        <span class="glyphicon glyphicon-star-empty" id="5" name="5" onClick="chooseStar(5)"></span>
                                                    </div>
                                                </div>
                                                <input type="text" name="score" id="score" style="display:none">
                                                <input type="text" name="oid" id="oid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" style="display:none">
                                                <input type="text" name="gid" id="gid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[11];?>
" style="display:none">
                                                <input type="text" name="supid" id="supid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
" style="display:none">
                                                <div class="form-group row">
                                                    <div align="right" class="col-md-2 col-md-offset-2"><label for="evaldetails">评价详情:</label></div>
                                                    <div class="col-md-6"><textarea class="form-control" name = "evaldetails" id = "evaldetails" cols="28" rows="4"></textarea></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" name = "reset" id = "reset" value = "重置"></div>
                                                    <div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "submit" id = "submit" value = "提交"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value[14] == 3) {?>
                            <td>评价已完成</td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value[14] == 0) {?>
                            <td>无</td>
                            <?php }?>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tbody> 
				</table>
                <div class="row" align="center">
                	<h4>收货地址：<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][5];?>
</h4>
                    <h4>联系电话：<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][6];?>
</h4>
                    <h4>（因为一系列因素，暂时仅支持货到付款）</h4>
                </div>
            </div>
			<div class="panel-footer">
            	<div class="row">
                	<div class="col-md-4" align="center">
                    	共计：<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][2];?>
元
                    </div>
                    <div class="col-md-4" align="center">
                    	状态：<?php if ($_smarty_tpl->tpl_vars['orderarr']->value[0][4] == 1) {?>未提交<?php } elseif ($_smarty_tpl->tpl_vars['orderarr']->value[0][4] == 2) {?>已提交<?php } else { ?>已完成<?php }?>
                    </div>
                    <div class="col-md-4" align="center">
                    <?php if ($_smarty_tpl->tpl_vars['orderarr']->value[0][4] == 1) {?>
                    	<form name ="uporder" method="post" action="../php/dealOrder.php">
                        	<input type="text" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['orderarr']->value[0][0];?>
" style="display:none">
                    		<input class="btn btn-danger" type="submit" name="uporder" value="提交订单">
                    	</form>
                    <?php }?>
                    
                    </div>
                </div>
            </div>
    	</div>
	</div>
</div>
</font>

</body>
</html><?php }
}
