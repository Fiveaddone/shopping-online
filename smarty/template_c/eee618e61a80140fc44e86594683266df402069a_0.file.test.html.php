<?php
/* Smarty version 3.1.30, created on 2016-12-05 23:23:26
  from "C:\AppServ\www\shopping_online\smarty\test\tpl\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5845866ea39d45_10218124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee618e61a80140fc44e86594683266df402069a' => 
    array (
      0 => 'C:\\AppServ\\www\\shopping_online\\smarty\\test\\tpl\\test.html',
      1 => 1480951404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5845866ea39d45_10218124 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\AppServ\\www\\shopping_online\\smarty\\smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<?php echo smarty_modifier_capitalize(($_smarty_tpl->tpl_vars['content']->value).("good"));?>

<body>
</body>
</html>
<?php }
}
