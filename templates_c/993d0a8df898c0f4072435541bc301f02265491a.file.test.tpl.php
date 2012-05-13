<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:45:23
         compiled from "tpl\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144214fabae3cb89540-10942232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993d0a8df898c0f4072435541bc301f02265491a' => 
    array (
      0 => 'tpl\\test.tpl',
      1 => 1336927281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144214fabae3cb89540-10942232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fabae3cbce422_66353641',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fabae3cbce422_66353641')) {function content_4fabae3cbce422_66353641($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['asd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['asd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['test']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['asd']->key => $_smarty_tpl->tpl_vars['asd']->value){
$_smarty_tpl->tpl_vars['asd']->_loop = true;
?>

	{ $asd->getName() }
	
<?php } ?><?php }} ?>