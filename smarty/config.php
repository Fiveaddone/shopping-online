<?php
require('smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->setTemplateDir("tpl");
$smarty->setCompileDir("template_c");
$smarty->setCacheDir("cache");
?>