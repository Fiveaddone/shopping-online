<?php
/* Smarty version 3.1.30, created on 2016-12-22 12:19:47
  from "C:\AppServ\www\shopping_online\smarty\tpl\AdminFace.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585b54638e4b16_89786419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33ffa969be678e79f9673b96b305d996837d4568' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\tpl\\AdminFace.html',
      1 => 1482334720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585b54638e4b16_89786419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台管理页面</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="../jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
$(function () {
	$('#myTab li:eq(<?php echo $_smarty_tpl->tpl_vars['dispID']->value;?>
) a').tab('show')
});


function checkfaNull(form){
	if(form.fid.value == ""){
		alert('类别ID不能为空！');
		form.fid.focus();
		return false;
	}
	if(form.fname.value == ""){
		alert('类别名不能为空！');
		form.fname.focus();
		return false;
	}
	form.submit();
}

function checkcaNull(form){
	if(form.tid.value == ""){
		alert('类别ID不能为空！');
		form.tid.focus();
		return false;
	}
	if(form.tname.value == ""){
		alert('类别名不能为空！');
		form.tname.focus();
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
<?php echo '</script'; ?>
>

</head>

<body>
<div  class="navbar navbar-default" class="row" style="background-color:#F8F8FF">
    <div class="col-md-6 col-md-offset-6">
    	<ul class="nav navbar-nav">
            <li><a id="a_logined" href="##"><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
</a></li> 
            <li><a id="a_quit" href="#" onClick="return logout()">退&nbsp;出</a></li>
		</ul>
	</div>
</div> 
<br>
<div class="container">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
    	<li><a href="#goodsmanage" role="tab" data-toggle="tab">商品管理</a></li>
    	<li><a href="#usermanage" role="tab" data-toggle="tab">买家管理</a></li>
        <li><a href="#sellermanage" role="tab" data-toggle="tab">卖家管理</a></li>
        <li><a href="#addfacata" role="tab" data-toggle="tab">一级类别管理</a></li>
        <li><a href="#addcata" role="tab" data-toggle="tab">二级类别管理</a></li>
    
	</ul>

	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade" id="goodsmanage">
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
                                            
                                            <div class="row">
                                                <div class="col-md-6"><a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&delete=1&gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&gpicture=<?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
&tid=$item[3]">删除</a></div>
                                                <div class="col-md-6">
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value[8];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 0) {?>
                                                    <a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&grcom=0&gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">设为推荐</a>
                                                <?php } else { ?>
                                                    <a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
&grcom=1&gid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">取消推荐</a>
                                                <?php }?>
                                                </div>
                                            </div>
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
                			<a href="AdminFace.php?page=" >首页</a>
            			</div>
            			<div class="col-md-3" align="right">
               				<a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value-1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value-1];?>
">上一页</a>
            			</div>
            			<div class="col-md-3" align="right">
                			<a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['nowpage']->value+1;?>
" style="display:<?php echo $_smarty_tpl->tpl_vars['arrdisplay']->value[$_smarty_tpl->tpl_vars['nowpage']->value];?>
">下一页</a>
            			</div>
            			<div class="col-md-3" align="right">
               				<a href="AdminFace.php?page=<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
">尾页</a>
            			</div>
					</div>
    			</div>
    		</div>
    	<?php }?>
        </div> 
        
		<div class="tab-pane  fade" id="usermanage">
        	<div class="panel panel-default">
                <div class="panel-heading">用户列表</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>用户ID</th>
                                <th>用户名</th>
                                <th>账号状态</th>
                                <th>冻结/解封</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrusers']->value[0], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value[9];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 0) {?>
                                <td>正常</td>
                                <td><a href="../php/changeUstate.php?upage=<?php echo $_smarty_tpl->tpl_vars['unowpage']->value;?>
&dispID=1&uid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&isforb=0">冻结</a></td>
                                <?php } else { ?>
                                <td>已冻结</td>
                                <td><a href="../php/changeUstate.php?upage=<?php echo $_smarty_tpl->tpl_vars['unowpage']->value;?>
&dispID=1&uid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&isforb=1">解封</a></td>
                                <?php }?>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row" >
                        <div class="col-md-6" align="center">
                            <p>共有&nbsp; <?php echo $_smarty_tpl->tpl_vars['arrusers']->value[1];?>
 &nbsp;位用户&nbsp;&nbsp;
                                第&nbsp;<?php echo $_smarty_tpl->tpl_vars['unowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['arrusers']->value[2];?>
&nbsp;页</p>
                        </div>
                        <div class="col-md-4 col-md-offest-2">
                            <div class="row" align="right">
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?upage=1&dispID=1" >首页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?upage=<?php echo $_smarty_tpl->tpl_vars['unowpage']->value-1;?>
&dispID=1" style="display:<?php echo $_smarty_tpl->tpl_vars['uarrdisplay']->value[$_smarty_tpl->tpl_vars['unowpage']->value-1];?>
">上一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?upage=<?php echo $_smarty_tpl->tpl_vars['unowpage']->value+1;?>
&dispID=1" style="display:<?php echo $_smarty_tpl->tpl_vars['uarrdisplay']->value[$_smarty_tpl->tpl_vars['unowpage']->value];?>
">下一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?upage=<?php echo $_smarty_tpl->tpl_vars['arrusers']->value[2];?>
&dispID=1">尾页</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
        </div>
        <div class="tab-pane  fade" id="sellermanage">
        	<div class="panel panel-default">
                <div class="panel-heading">卖家列表</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>用户ID</th>
                                <th>用户名</th>
                                <th>账号状态</th>
                                <th>冻结/解封</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrsellers']->value[0], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value[8];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == 0) {?>
                                <td>正常</td>
                                <td><a href="../php/changeSstate.php?spage=<?php echo $_smarty_tpl->tpl_vars['snowpage']->value;?>
&dispID=2&sid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&isforb=0">冻结</a></td>
                                <?php } else { ?>
                                <td>已冻结</td>
                                <td><a href="../php/changeSstate.php?spage=<?php echo $_smarty_tpl->tpl_vars['snowpage']->value;?>
&dispID=2&sid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
&isforb=1">解封</a></td>
                                <?php }?>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row" >
                        <div class="col-md-6" align="center">
                            <p>共有&nbsp; <?php echo $_smarty_tpl->tpl_vars['arrsellers']->value[1];?>
 &nbsp;位用户&nbsp;&nbsp;
                                第&nbsp;<?php echo $_smarty_tpl->tpl_vars['snowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['arrsellers']->value[2];?>
&nbsp;页</p>
                        </div>
                        <div class="col-md-4 col-md-offest-2">
                            <div class="row" align="right">
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?spage=1&dispID=2" >首页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?spage=<?php echo $_smarty_tpl->tpl_vars['snowpage']->value-1;?>
&dispID=2" style="display:<?php echo $_smarty_tpl->tpl_vars['sarrdisplay']->value[$_smarty_tpl->tpl_vars['snowpage']->value-1];?>
">上一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?spage=<?php echo $_smarty_tpl->tpl_vars['snowpage']->value+1;?>
&dispID=2" style="display:<?php echo $_smarty_tpl->tpl_vars['sarrdisplay']->value[$_smarty_tpl->tpl_vars['snowpage']->value];?>
">下一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?spage=<?php echo $_smarty_tpl->tpl_vars['arrsellers']->value[2];?>
&dispID=2">尾页</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
        </div>
        <div class="tab-pane  fade" id="addfacata">
        <br><br>
        	<form name = "addfacata" method = "post" action = "../php/addCata.php" class="form-horizontal">
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="fid">类别ID：</label></div>
                    <div class="col-md-3"><input type = "text" class="form-control" name = "fid"  id="fid" size = "20"></div>
                </div>
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="fname">类别名：</label></div>
                    <div class="col-md-3"><input type = "text" class="form-control" name = "fname" id = "fname" size = "20"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" value = "重置"></div>
                    <div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "fsubmit" id = "fsubmit" value = "添加" onclick = "return checkfaNull(addfacata)"></div>
                </div>
            </form>
            
            <div class="panel panel-default">
                <div class="panel-heading">一级类别列表</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>类别ID</th>
                                <th>类别名</th>
                                <th>子类别数目</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrfacata']->value[0], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
                                <td><a href="AdminFace.php?fpage=<?php echo $_smarty_tpl->tpl_vars['fnowpage']->value;?>
&dispID=3&delfacata=1&fid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">删除</a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row" >
                        <div class="col-md-6" align="center">
                            <p>共有&nbsp; <?php echo $_smarty_tpl->tpl_vars['arrfacata']->value[1];?>
 &nbsp;个一级类别&nbsp;&nbsp;
                                第&nbsp;<?php echo $_smarty_tpl->tpl_vars['fnowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['arrfacata']->value[2];?>
&nbsp;页</p>
                        </div>
                        <div class="col-md-4 col-md-offest-2">
                            <div class="row" align="right">
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?fpage=1&dispID=3" >首页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?fpage=<?php echo $_smarty_tpl->tpl_vars['fnowpage']->value-1;?>
&dispID=3" style="display:<?php echo $_smarty_tpl->tpl_vars['farrdisplay']->value[$_smarty_tpl->tpl_vars['fnowpage']->value-1];?>
">上一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?fpage=<?php echo $_smarty_tpl->tpl_vars['fnowpage']->value+1;?>
&dispID=3" style="display:<?php echo $_smarty_tpl->tpl_vars['farrdisplay']->value[$_smarty_tpl->tpl_vars['fnowpage']->value];?>
">下一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?fpage=<?php echo $_smarty_tpl->tpl_vars['arrfacata']->value[2];?>
&dispID=3">尾页</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
        </div>
        <div class="tab-pane  fade" id="addcata">
        <br><br>
        	<form name = "addcata" method = "post" action = "../php/addCata.php" class="form-horizontal">
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="tid">类别ID：</label></div>
                    <div class="col-md-3"><input type = "text" class="form-control" name = "tid"  id="tid" size = "20"></div>
                </div>
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="tname">类别名：</label></div>
                    <div class="col-md-3"><input type = "text" class="form-control" name = "tname" id = "tname" size = "20"></div>
                </div>
                <div class="form-group">
                    <div align="right" class="col-md-2 col-md-offset-3"><label for="fID">父类ID：</label></div>
                    <div class="col-md-3">
                    	<select class="form-control" name = "fID" id = "fID">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facata']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-1 col-md-offset-5"><input type = "reset" class="btn btn-primary" value = "重置"></div>
                    <div class="col-md-1 col-md-offset-1" align="right"><input type = "submit" class="btn btn-primary" name = "tsubmit" id = "tsubmit" value = "添加" onclick = "return checkcaNull(addcata)"></div>
                </div>
            </form>
            
            <div class="panel panel-default">
                <div class="panel-heading">二级类别列表</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>类别ID</th>
                                <th>类别名</th>
                                <th>父类类别ID</th>
                                <th>类别下商品数</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrcata']->value[0], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
                                <td><a href="AdminFace.php?tpage=<?php echo $_smarty_tpl->tpl_vars['tnowpage']->value;?>
&dispID=4&delcata=1&fID=<?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
&tid=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">删除</a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row" >
                        <div class="col-md-6" align="center">
                            <p>共有&nbsp; <?php echo $_smarty_tpl->tpl_vars['arrcata']->value[1];?>
 &nbsp;个一级类别&nbsp;&nbsp;
                                第&nbsp;<?php echo $_smarty_tpl->tpl_vars['tnowpage']->value;?>
&nbsp;页&nbsp;/&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['arrcata']->value[2];?>
&nbsp;页</p>
                        </div>
                        <div class="col-md-4 col-md-offest-2">
                            <div class="row" align="right">
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?tpage=1&dispID=4" >首页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?tpage=<?php echo $_smarty_tpl->tpl_vars['tnowpage']->value-1;?>
&dispID=4" style="display:<?php echo $_smarty_tpl->tpl_vars['tarrdisplay']->value[$_smarty_tpl->tpl_vars['tnowpage']->value-1];?>
">上一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?tpage=<?php echo $_smarty_tpl->tpl_vars['tnowpage']->value+1;?>
&dispID=4" style="display:<?php echo $_smarty_tpl->tpl_vars['tarrdisplay']->value[$_smarty_tpl->tpl_vars['tnowpage']->value];?>
">下一页</a>
                                </div>
                                <div class="col-md-3" align="right">
                                    <a href="AdminFace.php?tpage=<?php echo $_smarty_tpl->tpl_vars['arrcata']->value[2];?>
&dispID=4">尾页</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
        </div>
  
	</div>
</div>


</font>
</body>
</html>
<?php }
}
