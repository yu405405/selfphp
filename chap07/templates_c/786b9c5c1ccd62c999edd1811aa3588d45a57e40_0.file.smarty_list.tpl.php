<?php
/* Smarty version 3.1.47, created on 2022-11-20 17:56:32
  from '/Applications/MAMP/htdocs/selfphp/chap07/templates/smarty_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6379ebc0694554_42556459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786b9c5c1ccd62c999edd1811aa3588d45a57e40' => 
    array (
      0 => '/Applications/MAMP/htdocs/selfphp/chap07/templates/smarty_list.tpl',
      1 => 1453250904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6379ebc0694554_42556459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/selfphp/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
  <li
    <?php if ($_smarty_tpl->tpl_vars['book']->value['price'] > 3500) {?>style="color:Red;"<?php }?>>
    <a href="http://www.wings.msn.to/index.php/-/A-03/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['isbn'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
      <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
    （<?php echo mb_convert_encoding(htmlspecialchars(number_format($_smarty_tpl->tpl_vars['book']->value['price'],1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
円／
      <?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
刊行）
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>
<?php }
}
