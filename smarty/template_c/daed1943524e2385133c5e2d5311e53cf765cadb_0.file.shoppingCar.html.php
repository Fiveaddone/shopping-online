<?php
/* Smarty version 3.1.30, created on 2016-12-21 23:08:51
  from "C:\AppServ\www\shopping_online\smarty\tpl\shoppingCar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a9b03effa50_45152617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daed1943524e2385133c5e2d5311e53cf765cadb' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\shoppingCar.html',
      1 => 1482332928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a9b03effa50_45152617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>购物车</title>
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
		document.getElementById("u_logined").innerHTML=uname;
	}else{
		
	}
}
function logout(){
	if(confirm("确定要退出登录吗？")){
		window.open('../php/userQuit.php','_parent','',false);
	}else{
		return false;
	}
}

//选中全选按钮，下面的checkbox全部选中 
var selAll = document.getElementById("selAll"); 
function selectAll() { 
	var obj = document.getElementsByName("checkAll"); 
	if(document.getElementById("selAll").checked == false) { 
  		for(var i=0; i<obj.length; i++) { 
    		obj[i].checked=false; 
  		} 
	}else { 
  		for(var i=0; i<obj.length; i++) {	  
    		obj[i].checked=true; 
  		}	
  	} 
  
} 

//当选中所有的时候，全选按钮会勾上 
function setSelectAll() { 
	var obj=document.getElementsByName("checkAll"); 
	var count = obj.length; 
	var selectCount = 0; 

	for(var i = 0; i < count; i++) { 
		if(obj[i].checked == true) { 
			selectCount++;	
		} 
	} 
	if(count == selectCount) {	
		document.all.selAll.checked = true; 
	} else { 
		document.all.selAll.checked = false; 
	} 
} 

//反选按钮 
function inverse() { 
var checkboxs=document.getElementsByName("checkAll"); 
	for (var i=0;i<checkboxs.length;i++) { 
  		var e=checkboxs[i]; 
  		e.checked=!e.checked; 
  		setSelectAll(); 
	} 
} 

function getTotal(){
	var id = document.getElementsByName('checkAll');
    var count = 0;
	var cost = new Number;
	cost = 0;
    for(var i = 0; i < id.length; i++){
		if(id[i].checked){
			count++;
			cost+=parseInt(id[i].value);
		}
	}
	document.getElementById("totalcount").innerHTML=count;
	document.getElementById("totalcost").innerHTML=cost;
}

function checkOrder(form){
	if(parseInt(document.getElementById("totalcount").innerHTML)==0){
		alert('请至少选择一件商品！');
	}else{
		form.submit();
	}
}

function allcheckbox(){
	var id = document.getElementsByName('checkAll');
	var scid = document.getElementsByName('scid');
	var idarr = document.getElementsByName('scidarr');
	var str='';
	for(var i = 0; i < id.length; i++){
		if(id[i].checked){
			str+=scid[i].value;
			str+=",";
		}
	}
	document.getElementById("scidarr").setAttribute("value",str);
}
<?php echo '</script'; ?>
>
</head>
<font face="微软雅黑">
<body onLoad="nav()">
<div  class="navbar navbar-default" class="row" style="background-color:#F8F8FF">
    <div class="col-md-6 col-md-offset-6">
    	<ul class="nav navbar-nav">
            <li><a id="u_logined" href="userInfo.php"></a></li>
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
    		<div class="panel-heading">我的购物车</div>
			<div class="panel-body">
            <?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
            	<h3 align="center" style="color:#F00">您的购物车中暂无商品！</h3>
            <?php } else { ?>
				<table class="table table-bordered">
					<thead>
						<tr>
                        	<th><input type="checkbox" id="selAll" onclick="selectAll(),getTotal(),allcheckbox()" />&nbsp;&nbsp;&nbsp;&nbsp;全&nbsp;&nbsp;选</th>
							<th>商品名称</th>
							<th>单&nbsp;&nbsp;价（元）</th>
							<th>数&nbsp;&nbsp;&nbsp;&nbsp;量</th>
                            <th>尺&nbsp;&nbsp;&nbsp;&nbsp;寸</th>
                            <th>添加时间</th>
                        	<th>小&nbsp;&nbsp;计（元）</th>
                            <th>操&nbsp;&nbsp;作</th>
						</tr>
					</thead>
                    
					<tbody>
                        
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><input type="checkbox" name="checkAll" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[1]*$_smarty_tpl->tpl_vars['item']->value[5];?>
" onclick="setSelectAll(),getTotal(),allcheckbox()" >&nbsp;&nbsp;&nbsp;&nbsp;选&nbsp;&nbsp;择</td>
                                <td><a href="goodsDetails.php?gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1]*$_smarty_tpl->tpl_vars['item']->value[5];?>
</td>
                                <td><a href="../php/deleteGoods.php?scid=<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
">删除</a></td>
                                <input type="text" name="scid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
" style="display:none">
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <form name = "uporder" method = "post" action = "../php/upOrder.php">
                            <input type="text" name="scidarr" id="scidarr" value="" style="display:none">
                        </form>
					</tbody> 
				</table>
            
            </div>
			<div class="panel-footer">
            	<div class="row">
                    <div class="col-md-4" align="center">
                        <p>共有商品&nbsp; <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 &nbsp;件&nbsp;&nbsp;</p>
                    </div>
                    <div class="col-md-4" align="center">
                    	<p>选中<span id="totalcount">0</span>件,共计<span id="totalcost">0</span>元</p>
                    </div>
                    <div class="col-md-4" align="center">
                    	<input class="btn btn-danger" type="button" value="下&nbsp;&nbsp;&nbsp;&nbsp;单" onClick="return checkOrder(uporder)">
                    </div>
                </div>
            <?php }?>
            </div>
    	</div>
	</div>
</div>
</font>
</body>
</html>
<?php }
}
